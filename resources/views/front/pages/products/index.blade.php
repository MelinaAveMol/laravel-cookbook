@extends('front.layout.master')
@section ('title') Productos @endsection
@section ('description') Recetario @endsection
@section ('keywords') keto,vegano @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.products.desktop.products')
    @endif

    @if($agent->isMobile())
        @include("front.pages.products.mobile.products", ['products' => $products]);
    @endif

@endsection