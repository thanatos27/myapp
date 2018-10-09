@extends('layouts.app')
@section('title', 'HOME')

@section('content')
    <p>HOME PAGE</p>
    <p><a href="{{ url('/tasks') }}">Tasks</a></p>
    <p><a href="{{ url('/weather') }}">Weather</a></p>
    <p><a href="{{ url('/youtube') }}">YouTube</a></p>
@endsection
