<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Другие метатеги и стили -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Другие ваши стили -->

    @yield('styles') <!-- Место для ваших дополнительных стилей -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Your App Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('publics') ? 'active' : '' }}" href="{{ route('publics.index') }}">Publics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contests') ? 'active' : '' }}" href="{{ route('contests.index') }}">Contests</a>
                </li>
                <!-- Другие пункты меню, если необходимо -->
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Другие скрипты, если необходимо -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    @yield('scripts') <!-- Место для ваших дополнительных скриптов -->
</body>
</html>
