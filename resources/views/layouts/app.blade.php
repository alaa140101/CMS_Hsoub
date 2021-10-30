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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary shadow-sm">
            <div class="container">
                @include('partials.navbar')
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row text-right">
                    @yield('content')
                    <!--Sidebar widgets column-->

                </div>
            </div>
        </main>
        <footer class="bg-secondary text-center p-4">
            <a href="https://academy.hsoub.com">
                <img style="width:100px" src="https://academy.hsoub.com/uploads/monthly_2016_01/SiteLogo-346x108.png.dd3bdd5dfa0e4a7099ebc51f8484032e.png" alt="hasoub academy" />
            </a>
    </div>
</body>

</html>