@extends('layouts.app')

@section('title', 'Create Post page')

@section('content')
    <form method="post" action="/posts">
        <h3>Post Title</h3>
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Enter Post title"><br>
        <input type="submit" value="Submit"><br>
    </form>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@endsection
