@extends('backend.core.master')
@section('content')
    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                Thông tin phòng
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Trang chủ </a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Sửa thông tin phòng </li>

            </ol>

        </div>

        <div id="page-inner">

            <div class="row">

                <div class="col-md-12">

                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">



                        <div class="card-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Phòng </th>
                                        <th>Loại phòng </th>
                                        <th>Trạng thái phòng </th>
                                        <th>Ảnh phòng </th>
                                        <th>Giá </th>
                                        <th>Miêu tả ngắn </th>
                                        <th></th>
                                        <th>Xóa phòng </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($Rooms as $key=> $room)
                                    <tr class="odd gradeX">
                                        <td>{{$room->name}}</td>
                                        <td class="type{{$room->id_room}}"> </td>
                                        <td class="status{{$room->Status}}"> </td>
                                        <td id=""> <img src="{{asset('storage/'.$room->image)}}" style="width: 100px; height: 100px"></td>
                                        <td class="center">{{$room->price}}</td>
                                        <td class="center">{{$room->Describle}}</td>
                                        <td class="center"><a onclick="return confirm('Bạn chắc chứ ?')" href="{{route('room.edit',$room->id)}}"><button class="btn btn-warning btn-lg">CẬP NHẬT </button></a> </td>
                                        <td class="center"><a onclick="return confirm('Bạn có muốn xóa không ?')" href="{{route('room.delete',$room->id)}}"><button class="btn btn-warning btn-lg">XÓA </button></a> </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

            <footer><p>All right reserved. Template by: <a href="https://webthemez.com/admin-template/">WebThemez.com</a></p></footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function(){
            $( ".status1" ).text( "Phòng Trống" )
            $( ".status2" ).text( "Phòng Đang Thuê " )
            $( ".status3" ).text( "Phòng Đang Sửa" )
            $( ".type1" ).text( "Phòng Đơn " )
            $( ".type2" ).text( "Phòng Đôi" )
            $( ".type3" ).text( "Phòng Vip" )
        });

    </script>
@endsection
