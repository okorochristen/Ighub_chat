@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    You are logged in!
                    <ul class="list-group">
                        @foreach($users as $user)
                            @if($user->name!=auth()->user()->name)
                        <li class="list-group-item">
                             <a href="{{route('message',$user->id)}}">{{$user->name}}</a></li>
                        
                              
                            @endif
                        @endforeach
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
