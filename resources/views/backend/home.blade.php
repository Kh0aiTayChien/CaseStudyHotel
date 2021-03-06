@extends('backend.core.master')
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Quản lý phòng
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Data</li>
            </ol>

        </div>
        <div id="page-inner">


            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div class="card horizontal cardIcon waves-effect waves-dark">
                        <div class="card-image red">
                            <i class="fa fa-eye fa-5x"></i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3>16,150</h3>
                            </div>
                            <div class="card-action">
                                <strong> Daily Visits</strong>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div class="card horizontal cardIcon waves-effect waves-dark">
                        <div class="card-image orange">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3>25,550</h3>
                            </div>
                            <div class="card-action">
                                <strong> Sales</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div class="card horizontal cardIcon waves-effect waves-dark">
                        <div class="card-image blue">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3>11,225</h3>
                            </div>
                            <div class="card-action">
                                <strong> Comments</strong>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div class="card horizontal cardIcon waves-effect waves-dark">
                        <div class="card-image">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3>72,525</h3>
                            </div>
                            <div class="card-action">
                                <strong> No. of Visits</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- /. ROW  -->
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card-panel text-center">
                        <h4>Profit</h4>
                        <div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card-panel text-center">
                        <h4>No. of Visits</h4>
                        <div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card-panel text-center">
                        <h4>Customers</h4>
                        <div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card-panel text-center">
                        <h4>Sales</h4>
                        <div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->



            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-line-chart"></div>
                        </div>
                        <div class="card-action">
                            <b>Line Chart</b>
                        </div>
                    </div>

                </div>

                <div class="col-md-7">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <div class="card-action">
                            <b> Bar Chart Example</b>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-area-chart"></div>
                        </div>
                        <div class="card-action">
                            <b>Area Chart</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-donut-chart"></div>
                        </div>
                        <div class="card-action">
                            <b>Donut Chart Example</b>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <!-- /. ROW  -->





            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="card"><div class="card-action">
                            <b>Tasks Panel</b>
                        </div>
                        <div class="card-image">
                            <div class="collection">
                                <a href="#!" class="collection-item">Red<span class="new badge red" data-badge-caption="red">4</span></a>
                                <a href="#!" class="collection-item">Blue<span class="new badge blue" data-badge-caption="blue">4</span></a>
                                <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
                                <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
                                <a href="#!" class="collection-item">Alan<span class="new badge blue" data-badge-caption="blue">4</span></a>
                                <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
                                <a href="#!" class="collection-item">Custom Badge Captions<span class="new badge" data-badge-caption="custom caption">4</span></a>
                                <a href="#!" class="collection-item">Custom Badge Captions<span class="badge" data-badge-caption="custom caption">4</span></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-action">
                            <b>User List</b>
                        </div>
                        <div class="card-image">
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <i class="material-icons circle green">insert_chart</i>
                                    <span class="title">Title</span>
                                    <p>First Line <br>
                                        Second Line
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="material-icons circle">folder</i>
                                    <span class="title">Title</span>
                                    <p>First Line <br>
                                        Second Line
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="material-icons circle green">insert_chart</i>
                                    <span class="title">Title</span>
                                    <p>First Line <br>
                                        Second Line
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="material-icons circle red">play_arrow</i>
                                    <span class="title">Title</span>
                                    <p>First Line <br>
                                        Second Line
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
            <!-- /. ROW  -->
            <div class="fixed-action-btn horizontal click-to-toggle">
                <a class="btn-floating btn-large red">
                    <i class="material-icons">menu</i>
                </a>
                <ul>
                    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                </ul>
            </div>

            <footer><p>All right reserved. Template by: <a href="https://webthemez.com/admin-template/">WebThemez.com</a></p>


            </footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection
