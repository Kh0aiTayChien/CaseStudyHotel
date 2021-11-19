
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
            <a id="status"> Dung </a>
        </div>
        <div id="page-inner">

            <div class="row">
               @foreach($room as $key=> $value)

                <div class="col-md-3 ">

                    <div class="card "  style=" width: 18rem; height: 18rem " onclick="status({{$value->id}},this) " >
                        <button type="button" class="btn btn-info btn-lg btn-block">{{$value->name}}</button>
                        <div class="card-body " >
                            @if($value->status ==1 )
                                Con Phong
                            @endif
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

            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
{{--            <script src="{{asset('js/status.js')}}"> </script>--}}
            <script>
                function status(id,that){
                    $.ajax({
                            url: 'http://127.0.0.1:8000/api/status',
                            type: "POST",
                            data: {id},
                            datatype: 'JSON',
                            success: function(res){
                                console.log(res);
                                if(res.status==2){
                                    that.style.backgroundColor = "red";
                                }else {
                                    that.style.backgroundColor = "white";
                                }
                            }
                        }
                    )
                }
            </script>

@endsection
