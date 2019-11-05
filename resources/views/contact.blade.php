@extends('layouts.app')

@section('title', 'Posts page')

@section('sidebar')
    @parent
    <script>alert('Im AN')</script>
@endsection

@section('content')
    <h2>This is my content of posts page</h2>
    The current UNIX timestamp is {{ time() }}.
    <br>
    @if(count($testArray) > 1)
        <script>alert('array > 1')</script>
    @endif
@endsection


