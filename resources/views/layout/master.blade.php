
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical')">
    <link rel="alternate" href="@yield('alternate')" hreflang="vi-vn">

    {{--@if($setting->favicon)--}}
    {{--    <link rel="shortcut icon" href="{{ $setting->favicon }}" />--}}
    {{--@else--}}
       <link rel="shortcut icon" href="{{ asset('img/logo/favicon.ico') }}" />
    {{--@endif--}}

    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:description" content="@yield('ogDesc')">
    <meta property="og:url" content="@yield('ogUrl')">
    <meta property="og:site_name" content="Vincom Retail">  

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @section('pageCss')
    @show

</head>

<body>
    <div id="wrapper">
        <!-- Header -->
        @include('layout/header')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('layout/footer')
    </div>

    <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('js/toastr.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('js/mixitup.min.js') }}"></script> -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>

    @section('pageJs')
    @show
</body>

</html>
