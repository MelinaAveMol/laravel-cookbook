@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include("front.pages.products.mobile.products", ['products' => $products]);
    @endif

    @if($agent->isMobile())
        @include("front.pages.products.mobile.products", ['products' => $products]);
    @endif

@endsection