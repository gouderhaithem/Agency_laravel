<?php

namespace App\Http\Controllers;

use App\Models\announce;
use Illuminate\Http\Request;

class announce_details extends Controller
{
    //
    function index(){

        $data = announce::all();

        return view('Announce_Page',['announces'=>$data]);
    }
}
