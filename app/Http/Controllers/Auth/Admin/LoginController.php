<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:admins')->except('logout');

    }

    // Phương thức này trả về view dùng để đăng nhập cho admin
    public function getlogin()
    {
        return view('admin.login.login');
    }

    //
    public function postlogin(Request $request)
    {
//        dd($request->all());
        $this->validate($request,
            [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ],
            [

            ]);
        // Đăng nhập
        if (Auth::guard('admins')->attempt(
            ['email' => $request->email,
                'password' => $request->password
            ],
            $request->remember
        )) {
            return redirect()->intended(route('admin.index'));
        } else {
//            dd('2');
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
        /*
        * nếu đăng nhập thát bại thì quay trở lại form đăng nhập
        * với giá trị của 2 ô input cũ là email và remember
        */

    }

    // Phương thức này dùng để đăng xuất
    public function logout()
    {
        Auth::guard('admins')->logout();
        // chuyển hướng về trang login của admin
        return redirect()->route('admin.auth.login');
    }
}
