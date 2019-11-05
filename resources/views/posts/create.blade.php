@extends('layouts.app')

@section('title', 'Create Post page')

@section('content')
    <form method="post" action="/posts">
        <h3>Post Title</h3>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="title" placeholder="Enter Post title" ><br>
        <input type="submit" value="Submit">
    </form>

@endsection
