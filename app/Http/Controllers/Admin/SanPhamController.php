<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SanPhamController extends Controller
{
    /**
     * Update the given user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */


    /**
     * Danh sách sản phẩm
     */
    public function getDanhSach()
    {
        $product = DB::table('product')->paginate(4);
        return view('admin.sanpham.danhsach',['product'=>$product]);
    }
//    Truyền vào thể loại
    public function getThem()
    {
        $cate_product = DB::table('cate_product')->get();
        return view('admin.sanpham.them',['cate_product'=>$cate_product]);
    }
    public function postThem(Request $request)
    {
//        dd($request->all());
//        $avatar = $request->avatar;
//        dd($request->hasFile('avatar'));
        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/san-pham/them')->with('thongbao','Ban chi duoc chon file co duoi jpg png ...');
            }
            $name = $file->getClientOriginalName();
            $avatar = str_random(4) . "_" . $name;
            while (file_exists("admin/upload/images/san-pham/" . $avatar))
            {
                $avatar = str_random(4) . "_" . $name;
            }
//            dd($avatar);
            $file->move("admin/upload/images/san-pham/",$avatar);
        }
        else
        {
            $avatar = "";
        }

        DB::table('product')->insert([

            'title'=>$request->title,
            'content'=>$request->noidung,
            'price'=>$request->price,
            'avatar'=>$avatar,
            'amount'=>$request->amount,
            'where_production'=>$request->where_production,
//            'post_date'=>now(),
            'slug'=>str_slug($request->title),
            'cate_product_id'=>$request->cate_product,
            'status'=>$request->status,
            'created_at'=>now(),

        ]);
        return redirect('admin/san-pham/them')->with('thongbao','Thành công');
//        dd('1');
//        $this->validate($request,
////            [
////                'LoaiTin'=>'required',
////                'TieuDe'=>'required|min:3|unique:tintuc,TieuDe',
////                'TomTat'=>'required',
////                'NoiDung'=>'required'
////            ],
////            [
////                'LoaiTin.required'=>'Ban chua chon loai tin',
////                'TieuDe.required'=>'Ban chua nhap tieu de',
////                'TieuDe.min'=>'Tieu de phai co it nhat 3 ki tu',
////                'TieuDe.unique'=>'tieu de da ton tai',
////                'TomTat.required'=>'Ban chua nhap tom tat',
////                'NoiDung.required'=>'Ban chua nhap noi dung',
////
////            ]);
////        $tintuc = new TinTuc();
////        $tintuc->TieuDe = $request->TieuDe;
////        $tintuc->TieuDeKhongDau = changeTitle($request->TieuDe);
////        $tintuc->idLoaiTin = $request->LoaiTin;
////        $tintuc->TomTat = $request->TomTat;
////        $tintuc->NoiDung = $request->NoiDung;
////        $tintuc->SoLuotXem = 0;
////
////        if($request->hasFile('Hinh')) {
////            $file = $request->file('Hinh');
////            $duoi = $file->getClientOriginalExtension();
////            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
////            {
////                return redirect('admin/tintuc/them')->with('thongbao','Ban chi duoc chon file co duoi jpg png ...');
////            }
////            $name = $file->getClientOriginalName();
////            $hinh = str_random(4) . "_" . $name;
////            while (file_exists("upload/tintuc/" . $hinh))
////            {
////                $hinh = str_random(4) . "_" . $name;
////            }
////            $file->move("upload/tintuc",$hinh);
////            $tintuc->Hinh = $hinh;
////        }
////        else
////        {
////            $tintuc->Hinh = "";
////        }
////        $tintuc->save();
////        return redirect('admin/tintuc/them')->with('thongbao','Them tin thanh cong');
    }
    public function getxoa($id)
    {

        DB::table('product')->where('id','=',$id)->delete();
        return redirect('admin/san-pham/danh-sach')->with('thongbao','Xoa tin thanh cong');
    }

    public function getSua()
    {

    }


}