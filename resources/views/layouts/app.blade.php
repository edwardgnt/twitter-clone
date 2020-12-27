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

    <style>
        textarea {
            border: none;
            background-color: transparent;
            resize: none;
            outline: none;
            width: 100%;
        }

    </style>
</head>

<body>
    <div id="app">
        <section class="ml-5 mr-5 mt-4 mb-4">
            <header>
                <h1><img src="{{ asset('images/logo.svg') }}" alt="Tweety"></h1>
            </header>

            <main class="py-4">
                @yield('content')
            </main>
        </section>
    </div>
</body>

</html>
