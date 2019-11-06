@extends('layouts.app')

@section('title', 'Edit Post page')

@section('content')
    <form method="post" action="/posts/{{$post->id}}">
        <h3>Edit Title</h3>

        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{$post->title}}" placeholder="Enter Post title"><br>
        <input type="submit" value="Submit"><br>
    </form>

    <form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete"><br>
    </form>

@endsection
