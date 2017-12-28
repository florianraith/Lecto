<li class="nav-item">
    <div class="dropdown">
        <button class="btn btn-outline-secondary mx-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('authform.login')</button>
        <div class="dropdown-menu border-dark" id="login-dropdown">
            <form class="px-4 py-3" action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">@lang('authform.email_adress')</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">@lang('authform.password')</label>
                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        @lang('authform.remember_me')
                    </label>
                </div>
                <button type="submit" class="btn btn-dark">@lang('authform.login')</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('register') }}">@lang('authform.register_msg')</a>
            <a class="dropdown-item" href="{{ route('password.request') }}">@lang('authform.forgot_password')</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="btn btn-outline-secondary" href="{{ route('register') }}">@lang('authform.register')</a>
</li>