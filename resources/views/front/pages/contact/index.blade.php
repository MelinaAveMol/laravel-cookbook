@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include("front.pages.contact.desktop.contact")
    @endif

    @if($agent->isMobile())
        @include("front.pages.contact.mobile.contact")
    @endif

@endsection