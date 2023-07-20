<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="icon" href="{{ url('/img/caticologo.png') }}" type="image/x-icon">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body >
    
    <div id="app" style="background-color:white;">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-expand-lg navbar-light bg-white">

                    
                        <a class="navbar-brand" href="{{ url('/') }}">
                                <img class="logonav" src="{{ url('/img/logo-no-background.svg') }}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-md-auto mb-2 mb-md-0">
                                    <li class="nav-item active">
                                        <a class="nav-link navclass" href="{{ url('/') }}">О нас </a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link navclass" href="{{ url('/contact-us') }}">Записаться к врачу </a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link navclass" href="{{ url('/price') }}">Услуги </a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link navclass" href="{{ url('/onas') }}">Контакты </a>
                                    </li>
                                    
                                    <li class="nav-item active">
                                        <a class="nav-link navclass" href="{{ url('/reviews') }}">Оставьте ваш отзыв! </a>
                                    </li>
                                    
                                    @guest
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                        </li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Логин') }}</a>
                                        </li>
                                    @endif
                                    @else
                                    
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Выйти') }}
                                            </a>
                                            @if(Auth::user() && Auth::user()->role === 'admin')
                                            <a class="dropdown-item" href="{{ url('/admin/prices') }}">Админ-панель</a>
                                            
                                            
                                            
                                            
                        
                                            @endif  

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    
                                @endguest
                            </ul>
                            
                            <!-- Right Side Of Navbar -->
                            
                            
                        </div>
                    </div>
                
            </nav>
            <hr>
            <a class="calldoctor" href="tel:+7 (123) 456-78-90">Позвонить нам</a>
        </div>

        <main class="py-4">
            @yield('content')
            
        </main>
        @include('footer')
    </div>
</body>
</html>
