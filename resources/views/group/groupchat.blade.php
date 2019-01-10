@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">


        <div class="container col-md-8">
            <div class="form-group">


                    <div>
                        <label>Name of Group:</label>
                        <b>{{$groups->name}}</b>
                    </div>
            
                     <div>
                        <label>Duration:</label>
                         <b>{{$groups->duration}}</b>
                    </div>
                    
                     <div>
                        <label>Project Manager:</label>
                         <b>{{$groups->manager}}</b>
                    </div>
                
                    <div>
                        <label>Project Manager:</label>
                         <b>{{$groups->participant}}</b>
                    </div>
            

                    <div>
                        <label>Group was Created:</label>
                         <b>{{$groups->created_at->diffForHumans()}}</b>
                    </div>
            </div>
        </div>



<!--        div for comment starts here -->
                    <div class=" col-md-8">
                         <div class="panel quote">
                                            <h1>chats</h1>

                         @if($groups->groupchats  )

                            @foreach($groupchats as $groupchat)
                                <div class="panel panel-default">
                                    {{$groupchat->content}}
                                </div>

                                <div class="panel-footer">
                                    {{$groupchat->user->name}}
                                </div>
                           @endforeach
                         @endif
                        </div>
                    </div>
<!--        div for comment ends here -->

        

<!--         for error for unfilled form starts here -->

            @if(count ($errors->all())>1)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach

            @endif
<!--        for error for unfilled form ends here -->


<!--        form starts here -->
        <form method="post" action="{{ route('chat') }}" class="col-md-9">
                            @csrf

             <div class="form-group">
                 
    <!--            for success starts here -->
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
    <!--            for success ends here -->

                    <textarea id="my-input" class="form-control" rows="3" col="60" placeholder="Message" name="content" required></textarea>
                    <input class="btn btn-primary" type="submit" value="chatup">
             </div>
        </form>
<!--          form ends here-->



  </div>
</div>

@endsection
