<!DOCTYPE html>
<html>
<head>
    <title>Konferencijų registracija</title>
    <!-- Add your styles and scripts -->
</head>
<body>
    <nav>
        <!-- Other navigation links -->
        <a href="{{ url('/conferences') }}">Konferencijos</a>
        
        <!-- Logout form -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Atsijungti</button>
        </form>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
