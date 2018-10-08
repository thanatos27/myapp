<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    {{--laravelにbootstrapwを導入する--}}
    {{--https://laravel10.wordpress.com/2015/03/07/%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AElaravel-5-15-bootstrap3-%E3%81%A7%E8%A1%A8%E7%A4%BA%E3%82%92%E6%95%B4%E3%81%88%E3%82%8B/--}}

    {{--bootstrapテンプレート(公式)--}}
    {{--http://getbootstrap.com/docs/4.1/examples/--}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(app('env')=='local')
        {{--bootstrapのcss--}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{--自前のcss--}}
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @endif
    @if(app('env')=='production')
        {{--bootstrapのcss--}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{--自前のcss--}}
        <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet">
    @endif

    <title>@yield('title')</title>
</head>
<body>
@include('layouts._navbar')

<div class="container py-4">
    @yield('content')
</div>

{{-- JS --}}
{{--Placed at the end of the document so the pages load faster--}}
@if(app('env')=='local')
    <script src="{{ asset('js/app.js') }}" defer></script>
@endif
@if(app('env')=='production')
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
@endif
</body>
</html>
