@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include("front.pages.checkout.desktop.checkout")
    @endif

    @if($agent->isMobile())
        @include("front.pages.checkout.mobile.checkout")
    @endif

@endsection