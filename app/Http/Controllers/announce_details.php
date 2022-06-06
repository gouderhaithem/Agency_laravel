<?php

namespace App\Http\Controllers;

use App\Models\announce;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class announce_details extends Controller
{
    //
    function index(){

        $data = announce::all();
        $donnes = comment::all();
        return view('Announce_Page',['announces'=>$data,'comments'=>$donnes]);
    }
    function addcomment(Request $request){
        $comment = new comment;
        $user_name = Auth::user()->name;
        $comment->user_name = $user_name;
        $comment ->commentaires = $request->commentaires;
        $comment->save();
        return redirect('/announce_details')->with('status', 'Blog Post Form Data Has Been inserted');


    }

}
