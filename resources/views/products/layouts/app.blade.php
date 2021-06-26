<!DOCTYPE html>
<html>
<head>
    <title>Admin Products  @yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::asset('/css/product.css')}}">
    <script src="{{URL::asset('/js/jquery-3.6.0.js')}}"></script>
</head>
<body>
<div class="container">

    @section('header')
    <div class="header">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('product') }}">Sản phẩm</a></li>
            <li><a href="{{ URL::to('product/create') }}">Thêm mới</a></li>
        </ul>
    </div>
    @show
    @yield('content')

</div>
</body>
</html>