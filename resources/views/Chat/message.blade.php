@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container-flex">
            <div class="panel-header    ">All messages</div>
            <hr>
            @if($messages)
            @foreach($messages as $message)
            <div class="panel-body">
            
                @if($message->receiver_id==auth()->user()->id)
          
                <div class="media text-primary">
                <div class="mr-3">
                <img  src="/storage/upload/{{$message->sender->picture}}" alt="" width="100px" height="100px">
                </div>
                <div class="media-body">
                <h5 class="mt-0">{{$message->sender->name}}</h5>
                {{$message->message}}</div>
                <div class="media-footer">{{$message->created_at->diffForHumans()}}</div>
                </div>
                <br>
                <hr>
                @elseif($message->user_id==auth()->user()->id)
                <div class="media text-success">
                <div class="media-body">
                <h5 class="mt-0 mb-1">
                    {{$message->sender->name}}
                </h5>
                {{$message->message}}</div>
               
                <div class="media-footer">{{$message->created_at->diffForHumans()}}</div>
                </div>
                <br>
                <hr>  
                @endif
           
            </div>
            @endforeach
            @endif
        </div>
            <div class="card">
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
                <div class="card-header">{{ __('Send message') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('message.send',$receiver->id)}}">
                        @csrf

                        <div class="form-group row">
                            <label for="receiver_id" class="col-sm-4 col-form-label text-md-right">{{ 'Receiver' }}</label>

                            <div class="col-md-6">
                                <h1>{{$receiver->name}}</h1>
                                <input id="receiver_id" type="hidden" class="form-control{{ $errors->has('receiver_id') ? ' is-invalid' : '' }}" name="receiver_id" value="{{ $receiver->id}}" required autofocus>

                                @if ($errors->has('receiver_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('receiver_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" required></textarea>

                                @if ($errors->has('message'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
            

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Message
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
                <!-- dhfuj -->
            
                <!-- jhdhj -->
            </div>
        </div>
    </div>
</div>
@endsection