<html>

<head>
    <title>App name - @yield('title')</title>
</head>

<body>
@section('sidebar')
@show

<div class="container">
    @yield('content')
</div>

@yield('footer')
</body>

</html>