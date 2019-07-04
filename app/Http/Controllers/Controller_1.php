<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_1 extends Controller
{
    public  function get_trangchu(){
    	return view('pages.trangchu');
    }

    public  function get_gioithieu(){
    	return view('pages.gioithieu');
    }

    public  function get_sanpham(){
    	return view('pages.sanpham');
    }
}
