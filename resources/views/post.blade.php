@extends('layouts.learn')

@section('title', 'Posts page')

@section('sidebar')
    @parent
    <p>This is apened to the master side bar.</p>
@endsection

@section('content')
    <h2>This is my content of posts page</h2>
@endsection
