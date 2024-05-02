<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css')}}">
    <title>@yield('title') | Restaurant</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Agence</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arial-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container mt-5">

        

        @yield('content')
    </div>
</body>
</html>