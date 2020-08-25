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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <section class="flex px-8 py-4">
        <header class="container mx-auto">
            <img src="/images/twitter-logo.png" style="height: 30px" alt="Twitter">
        </header>
    </section>
    <section class="px-8">

        <main class="py-4 container mx-auto">
            <div class="container">
                <div class="lg:flex">
                    @if(auth()->check())
                        <div class="lg:w-1/6">
                            @include('_side_bar_links')
                        </div>
                    @endif
                    <div class="lg:flex-1 lg:mx-10 lg:justify-between " style="max-width: 700px">
                        @yield('content')
                    </div>
                    @if(auth()->check())
                        <div class="lg:w-1/8 rounded-lg p-4">
                            @include('_friend_list')
                        </div>
                    @endif
                </div>
            </div>
        </main>
    </section>
</div>
</body>
</html>
