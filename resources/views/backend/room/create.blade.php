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
        <form>
            <div class="form-group h1">
                <label for="exampleFormControlInput1" class="display-2 ">Tên Phòng </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Loại Phòng </label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Trạng thái phòng </label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
@endsection
