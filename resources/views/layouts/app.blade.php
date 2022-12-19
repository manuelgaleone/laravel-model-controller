<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cinema Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>