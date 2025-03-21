<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movies</title>

    @vite(["resources/sass/app.scss","resources/js/app.js"])

</head>
<body>
@include("partials.header")

<main>
    <div class="container my-5">
        @yield('content')
    </div>
</main>
    
</body>
</html>