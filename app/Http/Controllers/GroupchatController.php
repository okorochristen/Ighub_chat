<?php

namespace App\Http\Controllers;
use App\Groupc;
use App\Groupchat;
use App\Group;
use Auth;
use Illuminate\Http\Request;

class GroupchatController extends Controller
{
    //
    
   public function store(Request $request ){
    
    $id =Auth::user()->id;
    $groupchats = new Groupchat([
        'content'=>$request->content,
        'group_id'=>$id
    ]);
    $groupchats->save();
  
   return redirect()-> back()->with('status','successful');
}
    public function show(){
         dd($groupchats);
        $groupchats =Groupchat::all();
        return view('group.groupchat.{$group->id}',compact('groupchats'));
         
    }
}
