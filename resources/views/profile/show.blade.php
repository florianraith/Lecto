@extends('layout.layout')

@section('main')
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if(Auth::check() && Auth::user()->id == $user->id)
                <div class="card border-dark">
                    <div class="card-header bg-dark text-white">@lang('profile.yours')</div>

                    <div class="card-body">
                        @lang('profile.welcome') {{ Auth::user()->name }}!
                        <button type="button" class="btn btn-dark float-right" data-toggle="modal" data-target="#post-modal">@lang('profile.post_message')</button>
                        @include('message.postmodal')
                    </div>
                </div>
            @endif
        </div>
    </div>

    {{-- This will display if the profile is from the logged-in user. --}}
    @if(Auth::check() && Auth::user()->id == $user->id)
        @include('message.deletemodal')
        <div class="row justify-content-center my-3">
            <h3>@lang('profile.your_posts')</h3>
        </div>

        <div class="row">
            <div class="card-columns">
                @foreach($messages as $message)
                    <div class="card border-{{ $message->getColor()->getBSuffix() }}">
                        <div class="card-header bg-{{ $message->getColor()->getBSuffix() }} text-{{ $message->getColor()->getBTextSuffix() }}">
                            {{ $message->user->name }}
                            <span class="ml-1">#{{ $message->id }}</span>
                            <div class="float-right">
                                <small class="mr-2">{{ $message->created_at }}</small>
                                <button type="button" class="close text-{{ $message->getColor()->getBTextSuffix() }}" aria-label="Close" style="margin-top: -3px;">
                                    <span aria-hidden="true" class="delete-post" data-toggle="modal" data-target="#delete-modal" data-postid="{{ $message->id }}">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" id="post-message-{{ $message->id }}">
                            {{ $message->message }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    {{-- This will display if the profile is NOT from the logged-in user. --}}
    @else
        <div class="row justify-content-center my-3">
            <h3>@lang('profile.someone_posts', ['name' => $user->name])</h3>
        </div>

        <div class="row">
            <div class="card-columns">
                @foreach($messages as $message)
                    <div class="card border-{{ $message->getColor()->getBSuffix() }}">
                        <div class="card-header bg-{{ $message->getColor()->getBSuffix() }} text-{{ $message->getColor()->getBTextSuffix() }}">
                            {{ $message->user->name }}
                            <span class="ml-1">#{{ $message->id }}</span><small class=" float-right">{{ $message->created_at }}</small>
                        </div>
                        <div class="card-body">
                            {{ $message->message }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

@endsection
