@extends('layouts.app')

@section('title', 'Show Post ')

@section('content')
    <h1>I'm {{$post->title}}</h1>
@endsection