<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>USMP FIA</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                 <img src="data:image/png;base64,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" alt="USMP FIA" height="40">
            </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    USMP FIA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

