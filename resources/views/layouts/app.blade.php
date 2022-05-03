<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('metaTitle')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">

                @guest
                    {{-- Link logo page welcome --}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    @else
                        {{-- Link logo database boolpress index --}}
                        <a class="navbar-brand" href="{{ route('admin.posts.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 59 59" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g><g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none" fill-rule="evenodd"><g id="038---Cloud-Data" fill-rule="nonzero">
                                <path id="Shape" d="m40 4v23.05l-9.23 6.32-20.6 14.11c-6.08-.68-10.17-1.99-10.17-3.48v-40z" fill="#3f5c6c" data-original="#3f5c6c"></path>
                                <path id="Shape" d="m40 17v10.05l-9.23 6.32c-3.5733008.4349298-7.1703602.6453428-10.77.63-11.05 0-20-1.79-20-4v-13c0 2.21 8.95 4 20 4s20-1.79 20-4z" fill="#35495e" data-original="#35495e"></path>
                                <path id="Shape" d="m27.971 17.231c-.5522847.023196-1.018804-.4057153-1.042-.958s.4057153-1.018804.958-1.042c2.649439-.1928603 5.2795722-.594101 7.866-1.2.5338367-.1329664 1.0748187.1902488 1.210707.7233492.1358884.5331004-.1843589 1.0758446-.716707 1.2146508-2.6927302.6339441-5.4311907 1.0549113-8.19 1.259z" fill="#35495e" data-original="#35495e"></path>
                                <circle id="Oval" cx="4" cy="10" fill="#ff5364" r="1" data-original="#ff5364"></circle><path id="Shape" d="m4 17c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1s1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1z" fill="#35495e" data-original="#35495e"></path>
                                <circle id="Oval" cx="4" cy="23" fill="#ff5364" r="1" data-original="#ff5364"></circle><path id="Shape" d="m4 30c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1s1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1z" fill="#2c3e50" data-original="#2c3e50"></path>
                                <circle id="Oval" cx="4" cy="36" fill="#ff5364" r="1" data-original="#ff5364"></circle><path id="Shape" d="m4 43c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1s1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1z" fill="#35495e" data-original="#35495e"></path>
                                <path id="Shape" d="m38.944 27c5.613 0 10.276 4.5 11.1 10.348 4.54.809 8.014 5.1 8.014 10.257 0 5.732-4.292 10.4-9.569 10.4h-30.466c-4.423-.005-8.023-3.915-8.023-8.72s3.6-8.715 8.023-8.715h.163c.651-4.71 4.4-8.334 8.917-8.334.8129118.0002985 1.6214297.119218 2.4.353 1.9290077-3.4095139 5.5239573-5.5376966 9.441-5.589z" fill="#f0c419" data-original="#f0c419" class=""></path>
                                <ellipse id="Oval" cx="20" cy="4" fill="#547580" rx="20" ry="4" data-original="#547580"></ellipse></g></g></g>
                            </svg>
                        </a>
                @endguest

                {{-- Btn hamburger media queries --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar {{-- My link db boolpress --}} -->
                    <ul class="navbar-nav mr-auto ml-3">
                        @guest
                            
                            @else
                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a href="{{route('admin.posts.create')}}">Aggiungi</a>
                                </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
</body>
</html>
