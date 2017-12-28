@extends('layout.layout')

@section('title', '- Login')

@section('main')

    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card border-dark">
                <div class="card-header bg-dark text-white">@lang('authform.login')</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">@lang('authform.email_adress')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">@lang('authform.password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> @lang('authform.remember_me')
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="padding: 0 15px">
                            <button type="submit" class="btn btn-dark">
                                @lang('authform.login')
                            </button>

                            <a class="btn btn-link text-dark" href="{{ route('password.request') }}">@lang('authform.forgot_password')</a>
                            <a class="btn btn-link text-dark" href="{{ route('register') }}">@lang('authform.register_msg')</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
