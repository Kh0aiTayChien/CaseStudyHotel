@extends('backend.core.master')
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Sửa thông tin phòng
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Trang chủ </a></li>
                <li><a href="#">Admin  </a></li>
                <li class="active">Sửa Thông Tin Phòng  </li>
            </ol>

        </div>

        <form  method="post" action="{{route('room.update',$room->id)}}" enctype="multipart/form-data" >
            @csrf
            <div class="row ">
                <div class="col-md-1">
                </div>
                <div class="col-md-5 ">
                    <div class="form-group h1">
                        <label for="exampleFormControlInput1" style="font-size: 20px">Tên Phòng </label>
                        <input type="text" class="form-control" value="{{$room->name}}"
                               id="exampleFormControlInput1" name="name" >
                    </div>
                    <div class="form-group h1">
                        <label for="exampleFormControlInput1" style="font-size: 20px">Giá Phòng  </label>
                        <input type="text" class="form-control" value="{{$room->price}}"
                               id="exampleFormControlInput1" name="price">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" style="font-size: 20px" >Loại Phòng </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_room" >
                            <option value="1">Phòng Đơn</option>
                            <option value="2">Phòng Đôi</option>
                            <option value="3">Phòng Vip</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" style="font-size: 20px">Trạng thái phòng </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status" >
                            <option value="1">Phòng Trống</option>
                            <option value="2">Đang Thuê</option>
                            <option value="3">Đang Sửa Chữa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" style="font-size: 20px">Miêu Tả </label>
                        <textarea  class="form-control" id="exampleFormControlTextarea1" rows="3" name="describle"> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1" style="font-size: 20px">Ảnh phòng </label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        <img src="{{asset('storage/'.$room->image)}}" style="width: 100px; height: 100px">
                    </div>

                    <div class="form-group">
                        <button class="button btn-primary" type="submit" value="Submit">Xac Nhan </button>
                    </div>


                </div>
            </div>
        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

        <script >
            $(document).ready(function() {
                $('select option[value="{{$room->Status}}"]').attr("selected", true);
                $('select option[value="{{$room->id_room}}"]').attr("selected", true);
                $("#exampleFormControlTextarea1").text('{{$room->Describle}}');
            });
        </script>
@endsection

