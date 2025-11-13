
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="apple-nav">
            <ul class="apple-nav-list">
                <li>
                    <a href="{{ url('/') }}">
                        <svg class="apple-nav-logo" xmlns="http://www.w3.org/2000/svg" width="14" height="44" viewBox="0 0 14 44"><path d="M13.2 24.2c0 2.2-1.8 3.8-4.1 3.8-2.3 0-4.1-1.6-4.1-3.8 0-2.2 1.8-3.8 4.1-3.8 2.3.1 4.1 1.6 4.1 3.8m-8.5-3.5c-2.4 0-4.6 1.9-4.6 4.7 0 2.9 2.4 4.2 4.4 4.2 1.1 0 2.3-.5 3.3-.5.9 0 2.3.5 3.4.5 2.1 0 4.6-1.4 4.6-4.4 0-2.5-1.9-4-3.8-4.2l-.2-.1c-1.6-.2-3.2-1.2-3.2-2.9 0-1.7 1.4-2.8 3.1-2.8 1.6 0 2.9.9 2.9.9l.2.1.2.1c-.2-2.5-2.2-3.8-4.5-3.8-2.1 0-4.2 1.5-4.2 3.6 0 1.9 1.4 2.9 3.1 3.1.2 0 .3.1.5.1 1.5.2 2.9 1.2 2.9 2.8 0 1.5-1.2 2.6-2.9 2.6-1.7 0-3-1.1-3-1.1l-.2-.1z"></path></svg>
                    </a>
                </li>
                <li><a href="products">Mac</a></li>
                <li><a href="products">iPad</a></li>
                <li><a href="products">iPhone</a></li>
                <li><a href="products">Watch</a></li>
                <li><a href="products">AirPods</a></li>
                <li><a href="products">TV y Casa</a></li>
                <li><a href="#">Entretenimiento</a></li>
                <li><a href="#">Soporte</a></li>
                <li><a href="products">Dónde comprar</a></li>
                <li ><a class="nav-link" href="{{ route("admin")}}">Admin</a></li>
                <li>
                    <a href="#">
                        <svg class="apple-nav-search" xmlns="http://www.w3.org/2000/svg" width="15" height="44" viewBox="0 0 15 44"><path d="M14.2 20.6c-1.6-1.6-3.8-2.5-6.2-2.5-4.6 0-8.2 3.7-8.2 8.2s3.7 8.2 8.2 8.2 8.2-3.7 8.2-8.2c0-2.4-.9-4.6-2.5-6.2l-.2-.2zm-6.2 12.5c-3.5 0-6.4-2.9-6.4-6.4s2.9-6.4 6.4-6.4 6.4 2.9 6.4 6.4-2.8 6.4-6.4 6.4z"></path></svg>
                    </a>
                </li>
            </ul>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
