@extends('layouts.app')
@section('title', 'Weather')

@section('content')
    <h1>{{$obj['title']}}</h1>
    <table class="table-bordered col-md-6 col-xs-12">
        <tr>
            <th scope="col"></th>
            <th scope="col">今日</th>
            <th scope="col">明日</th>
        </tr>
        <tr>
            <th scope="row" rowspan="2">天気</th>
            <td><img src="{{$obj['forecasts'][0]['image']['url']}}" width="{{$obj['forecasts'][0]['image']['width']}}" height="{{$obj['forecasts'][0]['image']['height']}}" alt="今日の天気"></td>
            <td><img src="{{$obj['forecasts'][1]['image']['url']}}" width="{{$obj['forecasts'][1]['image']['width']}}" height="{{$obj['forecasts'][1]['image']['height']}}" alt="明日の天気"></td>
        </tr>
        <tr>
            <td>{{$obj['forecasts'][0]['telop']}}</td>
            <td>{{$obj['forecasts'][1]['telop']}}</td>
        </tr>
        <tr>
            <th scope="row">最高気温</th>
            <td>{{$obj['forecasts'][0]['temperature']['max']['celsius']}}</td>
            <td>{{$obj['forecasts'][1]['temperature']['max']['celsius']}}</td>
        </tr>
        <tr>
            <th scope="row">最低気温</th>
            <td>{{$obj['forecasts'][0]['temperature']['min']['celsius']}}</td>
            <td>{{$obj['forecasts'][1]['temperature']['min']['celsius']}}</td>
        </tr>
    </table>
    <div class="card col-md-6 col-xs-12 mt-md-4">
        <pre>{{$obj['description']['text']}}</pre>
    </div>
@endsection

