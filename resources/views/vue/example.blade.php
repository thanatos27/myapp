@extends('layouts.app')
@section('title', 'HOME')

@section('content')
    <div class="container">
        <div id="app">
            {{--https://qiita.com/fruitriin/items/e0f2c9aa035c3ff2c874--}}
            {{-- デフォルトだとこの中ではvue.jsが有効 --}}
            {{-- example-component はLaravelに入っているサンプルのコンポーネント --}}
            <test-component></test-component>
        </div>
    </div>
@endsection
