<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Admin\AdminModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:admins')->only('index');
//        $messages= DB::table('requirements')->where('status', 0)->get();
//        $countmessages= DB::table('requirements')->where('status', 0)->count();
//        View::share('countmessages', $countmessages);
//        View::share('messages', $messages);
    }
    public function index()
    {
        $data[] = null;
//        $data['new'] = DB::table('news')->count();
//        $data['recruitments'] = DB::table('recruitments')->count();
//        $data['dungthu'] = DB::table('dungthu')->count();
//        return view('admincp.home', $data);
        return view('admin.index', $data);
    }
    
    
}
