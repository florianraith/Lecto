@extends('layout.layout')

@section('main')
    <div class="content">

       <div class="container text-center p-2">
           <h1>{{ env('APP_NAME', 'Lecto') }}</h1>
       </div>

        <div class="row mt-3">
            <div class="card-columns">
                @foreach($messages as $message)
                    <div class="card border-{{ $message->getColor()->getBSuffix() }}">
                        <div class="card-header bg-{{ $message->getColor()->getBSuffix() }} text-{{ $message->getColor()->getBTextSuffix() }}">
                            <a class="text-{{ $message->getColor()->getBTextSuffix() }}" href="{{ route('showProfile', ['user_id' => $message->user->name]) }}">{{ $message->user->name }}</a>
                            <span class="ml-1">#{{ $message->id }}</span><small class="float-right">{{ $message->created_at }}</small>
                        </div>
                        <div class="card-body">
                            {{ $message->message }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection