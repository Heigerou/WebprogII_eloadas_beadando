<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jani&Szabi Kft - @yield('title', 'Főoldal')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Jani&Szabi Kft</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('adatbazis') }}">Adatbázis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kapcsolat') }}">Kapcsolat</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uzenetek') }}">Üzenetek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('diagram') }}">Diagram</a>
                    </li>
                    @if(auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                        </li>
                    @endif
                @endauth
            </ul>
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Bejelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Regisztráció</a>
                    </li>
                @else
                    <li class="nav-item me-2">
                        <span class="navbar-text">Szia, {{ auth()->user()->name }}!</span>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-outline-light btn-sm">Kijelentkezés</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</main>

<footer class="bg-light text-center py-3 mt-5">
    <small>&copy; {{ date('Y') }} Jani&Szabi Kft - Vízvezeték-szerelés Sárgahegyen és környékén</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
