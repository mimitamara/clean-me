<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
{{--                    {{ config('app.name', 'Laravel') }}--}}
                    <img src="{{ asset('images/logo.png') }}"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.what-we-do') }}">What we do</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.about-us') }}">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.categories') }}">Categories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.subscriptions') }}">Subscriptions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>

                        <!-- Authentication Links -->
{{--                        @guest--}}
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if(auth()->user() && !auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages.categories') }}">Categories</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages.subscriptions') }}">Subscriptions</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Tasks
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('tasks.create') }}">
                                        Create a Task
                                    </a>

                                    <a class="dropdown-item" href="{{ route('tasks.index') }}">
                                        History
                                    </a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('client.profile') }}">
                                        Profile
                                    </a>

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
                            @endif

                            @if(auth()->user()->is_admin)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Admin
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('client.profile') }}">
                                        Profile
                                    </a>

                                    <a class="dropdown-item" href="{{ route('admin.index') }}">
                                        Statistics
                                    </a>

                                    <a class="dropdown-item" href="{{ route('admin.categories.index') }}">
                                        Categories
                                    </a>

                                    <a class="dropdown-item" href="{{ route('admin.steps.index') }}">
                                        Steps
                                    </a>

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
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        <footer class="py-5">
            <div class="container">
                <nav class="navbar navbar-expand">
                    <ul class="navbar-nav flex-column flex-md-row mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.about-us') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms & Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Private Policy</a>
                        </li>
                    </ul>
                </nav>
                <div class="text-center my-4">
                    <a href="#">
                        <img class="social-icon" src="{{ asset('images/icons/fb.png') }}" alt="Facebook">
                    </a>
                    <a href="#">
                        <img class="social-icon" src="{{ asset('images/icons/ig.png') }}" alt="Instagram">
                    </a>
                </div>

                <p class="text-center text-white fs-5 mb-0">All rights reserved Clean ME</p>
            </div>
        </footer>
    </div>
</body>
</html>
