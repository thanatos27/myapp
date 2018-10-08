@extends('layouts.app')
@section('title', 'Tasks')

@section('content')
    {{--リスト--}}
    {{--http://bootstrap3.cyberlab.info/components/listGroup.html--}}
    {{--https://readouble.com/laravel/5.1/ja/quickstart.html--}}
    <div class="list-group">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{url('tasks/')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">New Task</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <button type="submit" class="btn btn-primary">Store</button>
                </form>
            </div>
        </div>

        @foreach ($tasks as $task)
            <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="list-group-item">
                {{$task->name}}
            </a>
        @endforeach
    </div>
@endsection
