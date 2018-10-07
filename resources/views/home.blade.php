<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    {{--laravelにbootstrapwを導入する--}}
    {{--https://laravel10.wordpress.com/2015/03/07/%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AElaravel-5-15-bootstrap3-%E3%81%A7%E8%A1%A8%E7%A4%BA%E3%82%92%E6%95%B4%E3%81%88%E3%82%8B/--}}

    {{--bootstrapテンプレート(公式)--}}
    {{--http://getbootstrap.com/docs/4.1/examples/--}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{--bootstrapのcss--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--自前のcss--}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <title>MYAPP</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="{{ url('/') }}">MYAPP</a>
    </nav>

    <div class="container py-4">
        <p>1行目</p><p>2行目</p><p>3行目</p><p>4行目</p><p>5行目</p><p>6行目</p><p>7行目</p><p>8行目</p><p>9行目</p><p>10行目</p><p>11行目</p><p>12行目</p><p>13行目</p><p>14行目</p><p>15行目</p><p>16行目</p><p>17行目</p><p>18行目</p><p>19行目</p><p>20行目</p><p>END</p>
    </div>

    {{-- JS --}}
    {{--Placed at the end of the document so the pages load faster--}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
