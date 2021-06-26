@extends('products.layouts.app')
@section('title')
<div class="container">
    @section('header')
        @parent
    @endsection
    @section('content')
    <h2>Thêm mới</h2> 
    <form action="{{ url('product') }}" method="POST" role="form" enctype="multipart/form-data">
    {{ csrf_field()}}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group col-md-3">
            <label for="category">Loại sản phẩm</label>
            <select id="category" class="form-control" name="category">
                <option value="Thực phẩm" selected>Thực phẩm</option>
                <option value="Đồ dùng">Đồ dùng</option>
                <option value="Đồ cũ">Đồ cũ</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="cost">Giá / đơn vị tính</label>
            <input type="text" class="form-control" id="unit_cost" name="unit_cost" placeholder="Giá bán.........vnđ">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="description">Giới thiệu sản phẩm</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Nhập thông tin giới thiệu"></textarea>
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">Đơn vị tính</label>
            <select id="unit" class="form-control" name="unit">
                <option value="Gói" selected>Gói</option>
                <option value="Cái">Cái</option>
                <option value="Hộp">Hộp</option>
                <option value="Kg">Kg</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="sl">Số lượng</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="số lượng / đơn vị tính">
        </div>
        <div class="form-group col-md-3">
            <label for="addimg">Thêm ảnh</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                        Browse… <input type="file" id="imgInp" name="img_path" />
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
            <img id='img-upload'/>
        </div>
        <div style="text-align: center;" class="d-block"><button type="submit" class="btn btn-success" style="background-color: #157d3f; width: 150px; ">Lưu lại</button></div>
    </div>
    </form>
    @endsection
</div>
<script src="{{URL::asset('/js/jquery-3.6.0.js')}}"></script>
<script src="{{URL::asset('/js/upimg.js')}}"></script>
