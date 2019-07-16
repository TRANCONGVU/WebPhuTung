<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Admin\AdminModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admins');
    }
    public function index()
    {
        $data['admins'] = DB::table('admins')
            ->select('admins.*','role.name as role')
            ->join('role','admins.level','=','role.id')
            ->get();
        return view('admincp.admin.index',$data);
        
    }

    public function create()
    {
        return view('admincp.admin.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:8',
            'password_confirmation' => 'bail|required|same:password',

        ]);


        $input= $request->all();
        $count = DB::table('admins')->where('email','=', $input['email'])->count();

        if($count == 1){
            return Redirect()->back()->with('thongbao', 'Email này đã được liên kết với một tài khoản khác!');
        }
        else {

            $item = new AdminModel();

            $item->name = $input['name'];
            $item->email = $input['email'];
            $item->level = $input['level'];
            $item->password = bcrypt($input['password_confirmation']);
            $item->save();

            return Redirect( route('adminAccount.index') )->with('thongbao','Tạo tài khoản thành công!');
        }
    }

    public function delete(Request $request)
    {
        DB::table('admins')->where('id',$request->id)->delete();
    }

    public  function edit($id){
        $data['admins'] = DB::table('admins')
        ->select('admins.*','role.name as role')
        ->join('role','admins.level','=','role.id')
        ->where('admins.id','=',$id)
        ->first();
        
        $data['roles'] = DB::table('role')->where('id','<',3)->get();
       
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die();
        return view('admincp.admin.edit',$data);
    }

    public function upadte(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'bail|required|email',

        ]);
        $input= $request->all();


        $item= AdminModel::find($id);

        $item->name = $input['name'];
        $item->email = $input['email'];

        if($input['level']==0){
            $item->level = $input['old_level'];
        }
        else {
            $item->level = $input['level'];
        }


        if(trim($input['password']) == ""){
            $item->save();
            return Redirect(route('adminAccount.index'))->with('thongbao','Tài khoản đã được cập nhật và không thay thế mật khẩu!');

        }
        else {
            $this->validate($request, [

                'password' => 'bail|min:8',
                'password_confirmation' => 'bail|same:password',

            ]);

            $item->password = bcrypt($input['password_confirmation']);
            $item->save();
            return Redirect(route('adminAccount.index'))->with('thongbao','Tài khoản đã được cập nhật và mật khẩu đã được thay đổi!');
        }
    }
}
