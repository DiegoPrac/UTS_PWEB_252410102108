<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TigerLog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <x-navbar :username="$username ?? null" />
    <main>
        @yield('content')
    </main>
    <x-footer />

</body>
</html>
