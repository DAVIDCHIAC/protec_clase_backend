<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'STORE')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <h1 class="logo">
                        <a href="{{ route('products.index') }}">STORE</a>
                    </h1>
                    <nav class="nav">
                        <a href="{{ route('products.index') }}" class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}">
                            Productos
                        </a>
                        <a href="{{ route('products.create') }}" class="nav-link {{ request()->routeIs('products.create') ? 'active' : '' }}">
                            Comprar
                        </a>
                    </nav>
                </div>
                
                <div class="header-right">
                    <div class="header-icons">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 22C9 22 3 18 3 12V5L12 2L21 5V12C21 18 15 22 15 22"/>
                            <path d="M16 8L12 12L8 8"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>
</body>
</html>