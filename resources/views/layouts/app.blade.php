<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="d-flex justify-content-center w-100">
                <div class="wrapper">
                    <div class="d-flex justify-content-start flex-row logo-block">
                        <a class="d-flex" href="{{ url('/') }}">
                            <img src="/svg/735145cfe0a4.png" alt="">
                        </a>
                        <button type="button" class="select-folowing-favorites">
                            <svg aria-label="Значок із шевроном униз" class="_ab6-" color="#262626" fill="#262626" height="12" role="img" viewBox="0 0 24 24" width="12"><path d="M12 17.502a1 1 0 01-.707-.293l-9-9.004a1 1 0 011.414-1.414L12 15.087l8.293-8.296a1 1 0 011.414 1.414l-9 9.004a1 1 0 01-.707.293z"></path></svg>
                        </button>


                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center search-block">
                        <input aria-label="Введення пошукового запиту" autocapitalize="none" class="search-field" placeholder="Пошук" type="text" value="">
                        <!--<div class="_aaw8" role="button" tabindex="0">
                            <div class="_aaw9">
                                <div class="_aawa">
                                    <svg aria-label="Пошук" class="_ab6-" color="#8e8e8e" fill="#8e8e8e" height="16" role="img" viewBox="0 0 24 24" width="16">
                                        <path d="M19 10.5A8.5 8.5 0 1110.5 2a8.5 8.5 0 018.5 8.5z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="16.511" x2="22" y1="16.511" y2="22"></line>
                                    </svg>
                                </div>
                                <span class="_aawc _aawd">Пошук</span>
                            </div>
                        </div>-->

                    </div>
                    <div class="" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->

                        <div class="header-right-controls">
                            <div class="header-control-icons">
                                @guest
                                @else
                                <div class="_acut">
                                    <div class="_acrd">
                                        <a class="qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq _a6hd" href="/" role="link" tabindex="0">
                                            <svg aria-label="Головна" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                                <path d="M9.005 16.545a2.997 2.997 0 012.997-2.997h0A2.997 2.997 0 0115 16.545V22h7V11.543L12 2 2 11.543V22h7.005z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                                            </svg>
                                        </a>
                                          </div>
                                </div>
                                <div class="_acut">
                                    <a aria-label="Повідомлення Direct – 0 нових посилань на сповіщення" class="qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq _aayf _a6hd" href="/direct/inbox/" role="link" tabindex="0">
                                        <svg aria-label="Messenger" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                            <path d="M12.003 2.001a9.705 9.705 0 110 19.4 10.876 10.876 0 01-2.895-.384.798.798 0 00-.533.04l-1.984.876a.801.801 0 01-1.123-.708l-.054-1.78a.806.806 0 00-.27-.569 9.49 9.49 0 01-3.14-7.175 9.65 9.65 0 0110-9.7z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="1.739"></path>
                                            <path d="M17.79 10.132a.659.659 0 00-.962-.873l-2.556 2.05a.63.63 0 01-.758.002L11.06 9.47a1.576 1.576 0 00-2.277.42l-2.567 3.98a.659.659 0 00.961.875l2.556-2.049a.63.63 0 01.759-.002l2.452 1.84a1.576 1.576 0 002.278-.42z" fill-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="_acut">
                                    <div class="_acub">
                                        <button class=""  type="button">
                                            <div class="_abm0">
                                                <svg aria-label="Новий допис" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                                    <path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line>
                                                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line>
                                                </svg>
                                            </div>
                                        </button>
                                                                            </div>
                                </div>
                                <div class="_acut">
                                    <a class="qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq _a6hd" href="/explore/" role="link" tabindex="0">
                                        <svg aria-label="Знайти людей" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                            <polygon fill="none" points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                                            <polygon fill-rule="evenodd" points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon>
                                            <circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                        </svg>
                                    </a>
                                </div>
                                <div class="_acut">
                                    <div class="_acui">
                                        <a class="_acuj _aa8k" href="/accounts/activity/">
                                            <svg aria-label="Стрічка дій" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                                <path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path>
                                            </svg>
                                        </a>
                                        <div class=""></div>
                                    </div>

                                </div>
                                @endguest
                                <div class="_acut">
                                    <!-- Right Side Of Navbar -->
                                    <div class="navbar-dropdown">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <div class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </div>
                                            @endif

                                            @if (Route::has('register'))
                                                <div class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </div>
                                            @endif
                                        @else
                                            <div class="nav-item dropdown">
                                                <a id="navbarDropdown"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    <span class="little-circle-icon" role="link" tabindex="0" style="width: 24px; height: 24px;">
                                                        <img alt="{{ Auth::user()->username }}" class="" crossorigin="anonymous" draggable="false" src="/thum_user/my_icon.jpg">
                                                    </span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
