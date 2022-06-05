<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_page extends Controller
{
    //
    function index(){
        return view('Home_Page');
    }
}
