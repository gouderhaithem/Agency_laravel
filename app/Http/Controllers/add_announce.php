<?php

namespace App\Http\Controllers;

use App\Models\announce;
use Illuminate\Http\Request;

class add_announce extends Controller
{
    //
    function index(){
        return view('Add_Announce_Page');
    }

    public function store(Request $request)
    {
        $announce = new announce;
        $announce->Category_id = $request->Category_id;
        $announce->title = $request->title;
        $announce->roomnumber = $request->roomnumber;
        $announce->surface = $request->surface;
        $announce->price = $request->price;
        $announce->place = $request->place;
        $announce->description = $request->description;
        $announce->save();
        return redirect('/')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
