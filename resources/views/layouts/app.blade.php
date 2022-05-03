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
<body class="bg-dark">

    {{-- App --}}
    <div id="app">

        {{-- Nav --}}
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">

                @guest
                    {{-- Link logo page welcome --}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><g><g><g><g><g id="XMLID_670_"><g id="XMLID_671_"><g id="XMLID_672_"><g id="XMLID_673_"><g id="XMLID_674_"><g id="XMLID_675_"><g id="XMLID_676_"><g id="XMLID_677_"><g id="XMLID_678_"><g id="XMLID_679_"><g id="XMLID_680_"><g id="XMLID_681_"><g id="XMLID_682_"><g id="XMLID_696_"><g id="XMLID_697_"><circle cx="256" cy="256" fill="#52525b" r="256" data-original="#52525b" class=""></circle>
                            </g><g><path d="m68.8 405.501 85.504 85.504c31.172 13.508 65.56 20.995 101.696 20.995 141.385 0 256-114.615 256-256 0-5.366-.165-10.693-.491-15.977l-68.31-68.31-14.905 19.096-140.254-140.254-114.804 99.99z" fill="#2c2c33" data-original="#2c2c33" class=""></path></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g><g><g><path d="m393.888 235.332-137.888-148.93-137.888 148.93-22.013-20.381 159.901-172.707 159.901 172.707z" fill="#ffffff" data-original="#ffffff"></path></g><path d="m393.888 235.333 22.013-20.382-159.901-172.707v44.158z" fill="#e0e0e0" data-original="#e0e0e0" class=""></path><path d="m213.79 78.019c0-23.312 18.898-42.21 42.21-42.21 0 0 28.108 18.898 28.108 42.21s-28.108 42.21-28.108 42.21c-23.312 0-42.21-18.898-42.21-42.21z" fill="#80d261" data-original="#80d261" class=""></path><g><g><g><path d="m298.21 78.019c0-23.312-18.898-42.21-42.21-42.21v84.42c23.312 0 42.21-18.898 42.21-42.21z" fill="#08b865" data-original="#08b865" class=""></path></g></g></g><path d="m443.2 405.501h-374.4v-50.313l19.468-66.581-19.468-66.581v-50.313h374.4v50.313l-11.486 66.581 11.486 66.581z" fill="#ffe029" data-original="#ffe029" class=""></path>
                            <g><path d="m443.2 171.713h-187.2v233.788h187.2v-50.313l-11.486-66.581 11.486-66.581z" fill="#ffad1d" data-original="#ffad1d"></path></g><path d="m68.8 222.026h374.399v133.162h-374.399z" fill="#ffffff" data-original="#ffffff"></path><g><path d="m256 222.026h187.2v133.162h-187.2z" fill="#e0e0e0" data-original="#e0e0e0" class=""></path></g><g><g><g><g><g><path d="m382.165 314.88h-14.548l-3.409-17.414-4.703 16.824h-12.397l-4.951-16.767-3.123 17.357h-14.51l9.341-51.937h12.977l6.265 21.213 5.922-21.185 12.977-.048z" fill="#2c2c33" data-original="#2c2c33" class=""></path></g></g></g><g><g><path d="m221.753 314.847h-27.675v-52.497h14.282v38.216h13.393z" fill="#52525b" data-original="#52525b" class=""></path></g></g><path d="m188.361 276.981v-14.282h-30.251v52.181h30.251v-14.282h-15.969v-4.668h14.792v-14.282h-14.792v-4.667z" fill="#52525b" data-original="#52525b" class=""></path><g><path d="m416.101 276.981v-14.282h-30.25v52.181h30.25v-14.282h-15.969v-4.668h14.792v-14.282h-14.792v-4.667z" fill="#2c2c33" data-original="#2c2c33" class=""></path></g><g><g>
                            <path d="m249.371 314.88c-14.483 0-26.265-11.782-26.265-26.265 0-14.482 11.782-26.265 26.265-26.265 5.262 0 10.342 1.553 14.69 4.49l5.917 3.997-7.994 11.835-5.917-3.997c-1.978-1.336-4.293-2.043-6.695-2.043-6.608 0-11.983 5.376-11.983 11.983 0 6.608 5.376 11.983 11.983 11.983 2.364 0 4.244-.651 5.747-1.989.291-.258.57-.547.829-.857l4.588-5.472 10.944 9.176-4.588 5.472c-.704.839-1.469 1.628-2.275 2.346-4.118 3.667-9.39 5.606-15.246 5.606z" fill="#52525b" data-original="#52525b" class=""></path></g></g><g><g><path d="m154.787 262.695-10.349 52.023-12.854.086-6.255-21.689-6.246 21.603-12.873.086-10.311-52.109h14.567l3.571 18.062 5.093-17.624 12.425.019 5.075 17.624 3.599-18.081z" fill="#52525b" data-original="#52525b" class=""></path></g></g><g><g><path d="m298.318 314.863c-14.482 0-26.264-11.782-26.264-26.265s11.783-26.265 26.264-26.265c14.483 0 26.265 11.782 26.265 26.265s-11.782 26.265-26.265 26.265zm0-38.248c-6.607 0-11.983 5.376-11.983 11.983s5.376 11.983 11.983 11.983c6.608 0 11.983-5.376 11.983-11.983s-5.375-11.983-11.983-11.983z" fill="#2c2c33" data-original="#2c2c33" class=""></path></g></g></g></g></g><g><g fill="#2c2c33">
                            <path d="m256.066 278.674 5.917 3.997 7.994-11.834-5.917-3.997c-2.483-1.677-5.204-2.903-8.061-3.646v15.436c.023.015.045.029.067.044z" fill="#2c2c33" data-original="#2c2c33" class=""></path>
                            <path d="m260.535 292.28-4.535 5.409v16.297c3.21-.906 6.125-2.492 8.616-4.711.806-.718 1.571-1.507 2.275-2.346l4.588-5.472z" fill="#2c2c33" data-original="#2c2c33" class=""></path>
                            </g></g></g></g>
                        </svg>
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
                    <ul class="navbar-nav mr-auto">
                        @guest
                            
                            @else
                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a class="@if (Route::is('admin.posts.index')) text-warning @endif" href="{{route('admin.posts.index')}}">Posts</a>
                                </li>
                                <li class="nav-item text-uppercase font-weight-bold">
                                    <a class="@if (Route::is('admin.posts.create')) text-warning @endif" href="{{route('admin.posts.create')}}">Aggiungi post</a>
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

                                <div class="dropdown-menu dropdown-menu-right bg-secondary" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
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


        {{-- Main --}}
        <main class="bg-dark">
            @yield('content')
        </main>
    </div>

</body>
</html>
