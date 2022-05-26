@extends('admin.layout.master')

@section('content')
<form class="admin-form">

    <div class="admin-panel">
        <div class="desktop-two-columns-aside">
            <div class="column-aside">
                <div class="table-container">
                    @yield('table')
                </div>
            </div>
            <div class="column-main">
                <div class="form-container">
                    @yield('form')
                </div>
            </div>
        </div>
    </div>

@endsection