<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_1 extends Controller
{
    public  function get_trangchu(){
    	return view('pages.trangchu');
    }
    public  function get_tintuc(){
    	return view('pages.tintuc');
    }
    public  function get_khuyenmai(){
    	return view('pages.khuyenmai');
    }
}
