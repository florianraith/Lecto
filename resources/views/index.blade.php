@extends('layout.layout')

@section('main')
    <div class="content">

       <div class="container text-center p-2">
           <h1>{{ env('APP_NAME', 'Lecto') }}</h1>
       </div>

        <div class="row mt-3">
            <div class="card-columns">
                @foreach($messages as $message)
                    <div class="card border-dark">
                        <div class="card-header bg-dark text-light">{{ $message->user->name }} <span class="ml-2">#{{ $message->id }}</span><small class="text-secondary ml-2 float-right">{{ $message->created_at }}</small></div>
                        <div class="card-body">
                            {{ $message->message }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection