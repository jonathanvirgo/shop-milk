@extends('layout.master')

@section('page') {{"Page not found"}}
@stop

@section('description')
@stop

@section('keywords')
@stop

@section('canonical')
@stop

@section('alternate')
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl')
@stop

@section('pageCss')
@stop

@section('content')
    <!-- 404 Page -->
        <div class="container">
            <div class="row" style="padding: 100px 0">
                <div class="col-5">
                    <img src="{{URL::asset('img/404-page.jpg')}}" alt="404 page not found">
                </div>
                <div class="col-7">
                    <span style="font-size: 24px; font-weight: bold;">Truy cập của bạn có thể bị lỗi hoặc không tìm thấy nội dung</span>
                    <a href="/" class="backBtn">Quay lại trang chủ</a>
                </div>
            </div>
        </div>
    <!-- 404 Page End -->
@stop

@section('pageJs')
<script>
        $( document ).ready(function() {
            $('.hero__item').css("display", "none");
        });
    </script>
@stop