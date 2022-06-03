<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/main-mobile.css">
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