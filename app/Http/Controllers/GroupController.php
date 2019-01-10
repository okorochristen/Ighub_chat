<?php

namespace App\Http\Controllers;
use App\Groupc;
use Auth;
use Illuminate\Http\Request;
use App\User;


class GroupController extends Controller
{
 public function create(){
     return view('group.create');
 }
    
 public function store(Request $request ){
    $id =Auth::user()->id;
    $group = new Groupc([
        'name'=>$request->name,
        'duration'=>$request->duration,
        'manager'=>$request->manager,
        'participant'=>$request->participant,
        'user_id'=>$id
    ]);
    $group->save();
    //it got $group which the field
    return redirect("group/groupchat/{$group->id}");
}
    
    public function group(){
        $groups = Groupc::all();
        return view('group.groups',compact('groups'));
    }
    
     public function groupchat($id){
        $groups = Groupc::whereId($id)->first();
        return view('group.groupchat',compact('groups'));
    }
}
