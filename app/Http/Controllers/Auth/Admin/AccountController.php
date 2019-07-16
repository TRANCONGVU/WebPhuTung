<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AccountController extends Controller
{
    public function postAccount(Request $request)
    {
//        dd($request->all());
        DB::table('admins')->insert([
            'name'=>$request->account_name,
            'phone'=>$request->account_phone,
            'email'=>$request->account_email,
            'email_verified_at'=>now(),
            'password'=>bcrypt($request->account_password),
            'level'=>$request->level,
        ]);
        return redirect()->intended(route('admin.login.get'));
//        'name' => 'admin',
//        'email' => 'admin@gmail.com',
//            'phone' => '0969902940',
//            'email_verified_at' => now(),
//            'password' => bcrypt('12345678'), // password :12345678
//            'level' => 3,

   }
}
