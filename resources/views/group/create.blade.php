@extends('layouts.app')
@section('content')
<div class="container col-md-8">
<form method="post">
@csrf
<div class="form-group">
        @if(session('status'))
        <div class="alert alert-success">{{
            session('status')
        }}</div>
        @endif
    
    <div>
        <label>Name of Group</label><br>
        <input type="text" name="name" class="form-control">
    </div>
    
     <div>
        <label>Duration</label><br>
        <input type="text" name="duration" class="form-control">
    </div>
    
     <div>
        <label>Project Manager</label><br>
        <input type="text" name="manager" class="form-control">
    </div>
    

<br><br>

    <div class="form-group">
    <label>Participants</label><br><textarea name="participant"  class="form-control"col="100" ></textarea>
    </div>
    
<input type="submit"  class ="btn btn-primary" value="submit">

</div>
@endsection