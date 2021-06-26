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
<h2 style="padding: 10px 0;">Quản lý sản phẩm</h2>

<div class="nav-action">
    <select name="tacvu" id="tacvu">
        <option value="">Tác vụ</option>
        <option value="delete">Delete</option>
        <option value="update">Update</option>
    </select>
    <button type="button">Áp dụng</button>
    <select name="loaisanpham" id="loaisanpham">
        <option value="">Lọc theo thể loại</option>
        <option value="Thực phẩm">Thực phẩm</option>
        <option value="Đồ dùng">Đồ dùng</option>
        <option value="Đồ cũ">Đồ cũ</option>
    </select>
    <button type="button">Lọc</button>
</div>


<!-- will be used to show any messages -->
<!-- @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif -->

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td style="width: 5%;"><input type="checkbox"></td>
            <td style="width: 7%;">ID</td>
            <td style="width: 18%;">Ảnh</td>
            <td>Tên</td>
            <td style="width: 12%;">Đơn giá</td>
            <td style="width: 10%;">Phân loại</td>
            <td style="width: 10%;">Số lượng còn</td>
            <td style="width: 15%;">Hoạt động</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td class="content-center"><input type="checkbox"></td>
            <td class="content-center">{{ $product->id }}</td>
            <td class="content-center"><img src="http://127.0.0.1:8000/img/{{$product->img_path}}" alt="profile Pic" height=auto width="150"></td>
            <td class="content-left">{{ $product->name }}</td>
            <td class="content-right">{{ $product->unit_cost }} đ / {{ $product->unit }}</td>
            <td class="content-center">{{ $product->category }}</td>
            <td class="content-right">{{ $product->quantity }}</td>
            <td class="content-center">
                <div class="action">
                <a  href="{{ URL::to('product/' . $product->id . '/edit') }}">
                    <button id="edit">edit</button>
                </a>                
                <form action="{{ url('/product/'. $product->id) }}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field()}}
                    <button id="delete">delete</button>
                </form>
                <a  href="{{ URL::to('product/' . $product->id) }}">
                    <button id="show">show</button>
                </a>
                
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tbody>
   
</table>

</div>
</body>
</html>