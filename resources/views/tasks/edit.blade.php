@extends('layouts.app')
@section('title', "Tasks")

@section('content')
    {{--フォームの作成--}}
    {{--https://qiita.com/sutara79/items/cd4371b246b44a2cf87f--}}
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{url('tasks/'.$task->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
                </div>

                <div class="form-group">
                    <label for="name">description</label>
                    <textarea class="form-control  input-sm" rows="10" id="description" name="description">{{ $task->description }}</textarea>
                </div>
                <div class="form-group float-left">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            <div class="form-group float-left ml-4">
                <a href="/tasks" class="btn btn-secondary" role="button">Back</a>
            </div>
            <div class="form-group float-right">
                <form method="POST" action="{{url('tasks/'.$task->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
    </div>
@endsection
