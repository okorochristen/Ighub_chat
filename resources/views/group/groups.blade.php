
@extends('layouts.app')
@section('content')
<div style="margin:0 auto;">
    @foreach($groups as $group)
    <div class="media media-default">
    <div class="media-heading">
    <a href="{{route('groupchat', $group->id)}}">{{$group->name}}</a>

    </div>
    </div>
    

   @endforeach
   </div>
   @endsection 
