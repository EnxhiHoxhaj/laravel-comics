<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Comics Laravel</title>

    <!-- {{-- Includiamo gli assets con la direttiva @vite --}} -->
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')

    @yield('header')

    @yield('content')

    @include('partials.footer')

</body>
</html>
