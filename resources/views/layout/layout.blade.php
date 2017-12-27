@extends('layout.base')

@section('body')

    @include('inc.navbar')

    <main role="main" class="container">
        @yield('main')
    </main>

@endsection