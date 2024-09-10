<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.css' integrity='sha512-hhSu9overYjKfSjPCtJW3688VHkfBh+W1pR5Mysll91bOJwGjYntytGTtVXb2aisFOaYXXDrO38NKXDRPJWu7A==' crossorigin='anonymous'/>
    <title>Comics Laravel</title>

    <!-- {{-- Includiamo gli assets con la direttiva @vite --}} -->
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')
    @include('partials.jambo')

    @yield('header')

    @yield('content')

    @include('partials.footer')

</body>
</html>
