@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include("front.pages.home.desktop.home")
    @endif

    @if($agent->isMobile())
        @include("front.pages.home.mobile.home")
    @endif

@endsection