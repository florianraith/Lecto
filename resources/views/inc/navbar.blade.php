<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ route('index') }}">{{ env('APP_NAME', 'Lecto') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

        </ul>
        <ul class="navbar-nav justify-content-end">
            @guest
                @include('inc.navlogin')
            @endguest
            @auth
                <li class="nav-item">
                    <a class="btn btn-outline-secondary mx-2" href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        <input type="submit" class="btn btn-outline-secondary" value="Log Out">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</nav>