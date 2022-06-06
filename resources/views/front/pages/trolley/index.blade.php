@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include("front.pages.trolley.desktop.trolley")
    @endif

    @if($agent->isMobile())
        @include("front.pages.trolley.mobile.trolley")
    @endif

@endsection