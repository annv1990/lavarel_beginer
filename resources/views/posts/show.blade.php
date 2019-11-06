@extends('layouts.app')

@section('title', 'Show Post ')

@section('content')
    <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h1>
@endsection