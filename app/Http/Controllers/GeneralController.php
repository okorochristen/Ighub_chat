<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\General;

class GeneralController extends Controller
{
    //
    
    public function index(){
        return view('chatt.chat');
    }

    public function show(){
        $chats = General::all();
        return view('chatt.chat',compact('chats'));
    }
    
    public function store(Request $request){
    
        $chats= new General([
            'content'=>$request->content,
            'user_id'=>Auth::user()->id,
        ]);
        $chats->save();
        return redirect()->back()->with('status','successful');
    }
}

