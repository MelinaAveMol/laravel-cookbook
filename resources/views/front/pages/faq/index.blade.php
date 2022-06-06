@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include("front.pages.desktop.faqs", ['faqs' => $faqs])
    @endif

    @if($agent->isMobile())
        @include("front.pages.mobile.faqs", ['faqs' => $faqs])
    @endif

@endsection