
@extends('layouts.app')

@section('content')




 <div class="panel panel-default">
    
        @if(count($chats)>0)
        @foreach($chats as $chat)
         <div class="panel-body">
            {{$chat->content}}
         </div>
         <div class="paniel-heading">
            
         </div>
     @endforeach
     @endif

    </div>

<form method="post" action="{{ route('Addchat') }}" class="col-md-9">
                @csrf

            <div class="form-group">
    {{-- for success starts here --}}
              @if(session('status'))
                <div class="alert alert-success">{{
                    session('status')
                }}</div>
              @endif
    {{-- for success ends here --}}

        
            <textarea id="my-input" class="form-control" rows="3" col="60" placeholder="Message" name="content"></textarea>

            <input class="btn btn-primary" type="submit" value="Chat">
                </div>
</form>            
@endsection