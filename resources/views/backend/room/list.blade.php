
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

            <div class="row ">
               @foreach($room as $key=> $value)

                <div class="col-md-2">

                    <div class="card{{$value->Status}} "  style=" width: 25rem; height: 18rem " onclick="status({{$value->id}},this) " >
                        <button type="button" class="btn btn-info btn-lg btn-block">{{$value->name}}</button>
                        <div class="card-body " >

                            <h5 class="card-title "></h5>
                            <h5 class="type{{$value->id_room}}" style="font-size: large; text-align: center  "> </h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text"></p>
                            <a href="#" class="card-link" >Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                </div>

                @endforeach

            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script src="{{asset('js/status.js')}}"> </script>
            <script>
                $(document).ready(function(){
                $( ".card1" ).css({'background':'green'})
                $( ".card2" ).css({'background':'red'})
                $( ".card3" ).css({'background':'purple'})
                    $( ".card3" ).off('click');

                $( ".type1" ).text("Phòng Đơn");
                $( ".type2" ).text('Phòng Đôi');
                $( ".type3" ).text('Phòng Vip');
                });

            </script>

@endsection
