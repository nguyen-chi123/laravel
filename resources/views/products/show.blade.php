<!DOCTYPE html>
<html>
<head>
    <title>Admin Products</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::asset('/css/product.css')}}">
</head>
<body>
<div class="container">
<div class="header">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('product') }}">Sản phẩm</a></li>
        <li><a href="{{ URL::to('product/create') }}">Thêm mới</a></li>
    </ul>
</div>
<h4 style="padding: 10px 0;">Sản phẩm > {{$p->name}}</h4>

<div class="container">
    <div class="row">
        <div class="col-md-5 image">
            <img src="{{URL::asset('/img/'.$p->img_path)}}" alt="" width="100%" height="auto">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 infomation">
            <h2 style="margin-top:0; padding-bottom: 20px;">{{$p->name}}</h2>
            <p style="font-size: 17px; padding-bottom: 20px;">{{ $p->description }}</p>
            <p style="font-size: 20px;"><strong>Giá:</strong>&emsp; <span style="color: red;">{{ $p->unit_cost }}</span> vnđ / {{ $p->unit }}</p>

        </div>
    </div>
</div>
</div>
</body>
</html>