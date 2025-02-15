<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front-assets/images/favicon-muna.png') }}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/responsive.css') }}">
</head>

<body class="template-index index-demo2">
    <div id="pre-loader">
        <img src="{{ asset('front-assets/images/loader.gif') }}" alt="Loading..." />
    </div>
    <div class="page-wrapper">

        @include('front.layouts.header1')
        @yield('content')
        @include('front.layouts.footer')
        

        <!-- Including Jquery -->
        <script src="{{ asset('front-assets/js/vendor/jquery-min.js') }}"></script>
        <script src="{{ asset('front-assets/js/vendor/js.cookie.js') }}"></script>
        <!-- Including Javascript -->
        <script src="{{ asset('front-assets/js/pluginsd41d.js?') }}"></script>
        <script src="{{ asset('front-assets/js/maind41d.js?') }}"></script>

    </div>
</body>

</html>