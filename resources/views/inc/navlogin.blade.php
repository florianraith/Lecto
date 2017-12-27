<li class="nav-item">
    <div class="dropdown">
        <button class="btn btn-outline-secondary mx-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log in</button>
        <div class="dropdown-menu border-dark" id="login-dropdown">
            <form class="px-4 py-3" action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">E-Mail Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-dark">Log in</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('register') }}">New around here? Sign up</a>
            <a class="dropdown-item" href="{{ route('password.request') }}">Forgot Your password?</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="btn btn-outline-secondary" href="{{ route('register') }}">Sign up</a>
</li>