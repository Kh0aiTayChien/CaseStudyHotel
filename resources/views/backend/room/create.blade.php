@extends('backend.core.master')
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Thêm mới phòng
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Trang chủ </a></li>
                <li><a href="#">Admin  </a></li>
                <li class="active">Thêm mới phòng </li>
            </ol>

        </div>

        <form  method="post" action="{{Route('room.store')}}" enctype="multipart/form-data" >
            @csrf
            <div class="row ">
                <div class="col-md-1">
                </div>
                <div class="col-md-5 ">
            <div class="form-group h1">
                <label for="exampleFormControlInput1" style="font-size: 20px">Tên Phòng </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" >
            </div>
                    <div class="form-group h1">
                        <label for="exampleFormControlInput1" style="font-size: 20px">Giá Phòng  </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="price">
                    </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1" style="font-size: 20px" >Loại Phòng </label>
                <select class="form-control" id="exampleFormControlSelect1" name="id_room">
                    <option>Phòng Đơn</option>
                    <option>Phòng Đôi</option>
                    <option>Phòng Vip</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1" style="font-size: 20px">Trạng thái phòng </label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                    <option>Phòng Trống </option>
                    <option>Đang Thuê </option>
                    <option>Đang Sửa Chữa </option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" style="font-size: 20px">Miêu Tả </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="describle"></textarea>
            </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1" style="font-size: 20px">Ảnh phòng </label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                    <button class="button btn-primary" type="submit" value="Submit">Xac Nhan </button>
                </div>


            </div>
            </div>
        </form>

@endsection
