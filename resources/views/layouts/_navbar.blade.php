<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ url('/') }}">MYAPP</a>
    {{--スマホレイアウトでハンバーガーアイコンを表示--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_target" aria-controls="navbar_target" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar_target">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                {{--名前付きルート--}}
                {{--https://laravel10.wordpress.com/2015/03/19/%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AElaravel-5-24-named-route/--}}
                <a class="nav-link" href="{{ url('tasks') }}">Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>
</nav>
