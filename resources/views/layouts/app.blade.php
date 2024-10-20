<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference App</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Kairėje pusėje navigacijos juosta -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('conferences.index') }}">Conferences</a>
                </li>
            </ul>

            <!-- Dešinėje pusėje navigacijos juosta -->
            <ul class="navbar-nav ms-auto">
                <!-- Neaktyvus Logout mygtukas -->
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-pzjw8f+ua7Kw1TIq3mKLpR+WWX5PsQOodLAD1TA8m3U++I86pc+S6jC6YQ5KZsO1" crossorigin="anonymous">
 
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR8OzHpEAsi+LSVYJaa6j/pzD4YfOifvDa+zU83H8" crossorigin="anonymous"></script>

<!-- Bootstrap JavaScript Bundle (includes Popper) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq3mKLpR+WWX5PsQOodLAD1TA8m3U++I86pc+S6jC6YQ5KZsO1" crossorigin="anonymous"></script>
    <div id="app">
        @yield('content')
    </div>
    
</body>
</html>
