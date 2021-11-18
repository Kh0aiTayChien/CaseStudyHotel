
@extends('backend.core.master')
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Quản lý phòng
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Trang chủ </a></li>
                <li><a href="#">Admin  </a></li>
                <li class="active">Quản lý phòng </li>
            </ol>

        </div>
        <div id="page-inner">

            <div class="row">
               @foreach($room as $key=> $value)

                <div class="col-md-2">
                    <div class="card" style="width: 18rem; height: 18rem" >
                        <button type="button" class="btn btn-danger btn-lg btn-block">{{$value->name}}</button>
                        <div class="card-body">

                            <h5 class="card-title">Loai Phong</h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text">{{$value->status}}</p>
                            <a href="#" class="card-link" >Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>




@endsection
