<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">

		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
        <meta name="keywords" 	 content="@yield('keywords')">

        @include('admin.layout.partials.styles')
        
    </head>
    
    <body>

        @include('admin.layout.partials.header')
        @include("admin.components.desktop.filters")
        @include('admin.components.desktop.modal_delete')

        @include('admin.components.desktop.title' , ['title' => "PANEL DE ADMINISTRACION"])
        <main>
            @yield('content')
            @yield('admin.layout.table-form.blade.php')
        </main>

        @include('admin.layout.partials.footer')
        @include('admin.layout.partials.js')
        
    </body>
</html>