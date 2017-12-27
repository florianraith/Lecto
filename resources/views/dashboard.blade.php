@extends('layout.layout')

@section('main')
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card border-dark">
                <div class="card-header bg-dark text-white">Dashboard</div>

                <div class="card-body">
                    Welcome {{ Auth::user()->name }}!
                    <br><br><br>
                    No new messages!
                </div>
            </div>
        </div>
    </div>
@endsection
