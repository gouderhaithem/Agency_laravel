<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomePageControllers
{
    function index(){
        return view('Home_Page');
    }
}
