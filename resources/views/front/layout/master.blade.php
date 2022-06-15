<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cookin'soul</title>
    
    @include('front.layout.partials.style')
</head>

<body>
    @include('front.layout.partials.header')
    
    <main>
        @yield('content')
    </main>

    @include('front.layout.partials.js')
</body>

</html>