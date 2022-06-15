@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include('front.pages.product.desktop.product')
    @endif

    @if($agent->isMobile())
        @include("front.pages.product.mobile.product");
    @endif

@endsection