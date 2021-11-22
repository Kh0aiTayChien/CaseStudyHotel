@extends('backend.core.master')
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
               Thông Tin Của Bạn
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Trang chủ </a></li>
                <li><a href="#">Admin  </a></li>
                <li class="active">Thông tin cá nhân</li>
            </ol>

        </div>

        <form  method="post" action="{{Route('user.update',Auth::user()->id)}}" enctype="multipart/form-data" >
            @csrf
            <div class="row ">
                <div class="col-md-1">
                </div>
                <div class="col-md-5 ">
                    <div class="form-group h1">
                        <label for="exampleFormControlInput1" style="font-size: 20px">Tên Của Bạn </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ Auth::user()->name }}">
                        <p class="alert-success">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group h1">
                        <fieldset disabled>
                        <label for="exampleFormControlInput1" style="font-size: 20px">Địa chỉ email  </label>
                        <input type="text"  class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->email}} " >
                            <p class="alert-success">{{ $errors->first('email') }}</p>
                        </fieldset>
                    </div>
                    <div class="form-group h1">
                        <label for="exampleFormControlInput1" style="font-size: 20px">Số Điện Thoại </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="phone" value="{{Auth::user()->phone }}">
                        <p class="alert-success">{{ $errors->first('phone') }}</p>
                    </div>

                    <div class="form-group">
                        <button class="button btn-primary btn-block" type="submit" value="Submit">Xac Nhan </button>
                    </div>


                </div>
                    <div class="col-md-5 ">
                        <div class="form-group">
                            <label for="exampleFormControlFile1" style="font-size: 20px">Ảnh Chân Dung  </label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <img src="{{asset('storage/'.Auth::user()->image)}}" style="width: 300px; height: 300px">
                        <p class="alert-success">{{ $errors->first('image') }}</p>
                    </div>


            </div>

        </form>

@endsection

