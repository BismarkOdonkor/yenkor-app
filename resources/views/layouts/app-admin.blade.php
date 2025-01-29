<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>{{ Auth()->user()->firstname }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="yencor - A ride hailing App for everyone">
    <link rel="icon" href="{{ asset('assets/assets/images/yenkor-favicon.ico') }}">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Main CSS -->
    <link href="{{ asset('assets/admin/css/main.07a59de7b920cd76b874.css') }}" rel="stylesheet">

    <!-- FontType and Icons CSS -->
	<link type="text/css" href="{{ asset('assets/admin/icon-font-7-stroke/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ asset('assets/admin/icon-font-7-stroke/pe-icon-7-stroke/css/helper.css') }}" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-gray">
    <div class="app-main">

        @include('admin.sidebar')

        <div class="app-sidebar-overlay d-none animated fadeIn"></div>

        <div class="app-main__outer">
            <div class="app-main__inner">

                @include('admin.header')

                <div class="app-inner-layout app-inner-layout-page">

                    {{-- @include('admin.sub-header') --}}
                    
                    @yield('content')
                    
                </div>
            </div>

            @include('admin.footer')

        </div>
    </div>

</div>

{{-- @include('admin.server-components') --}}

<div class="app-drawer-overlay d-none animated fadeIn"></div>

<script type="text/javascript" src="{{ asset('assets/admin/scripts/main.07a59de7b920cd76b874.js') }}"></script>

</body>

</html>