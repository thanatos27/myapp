@extends('layouts.app')
@section('title', 'TASKS')

@section('content')
    {{--リスト--}}
    {{--http://bootstrap3.cyberlab.info/components/listGroup.html--}}
    <div class="list-group">
        @foreach ($tasks as $task)
            <a href="#" class="list-group-item">
                {{$task->name}}
            </a>
        @endforeach
    </div>
@endsection
