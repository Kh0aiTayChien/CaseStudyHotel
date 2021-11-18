<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Track Material Design Bootstrap Admin Template</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/assets/materialize/css/materialize.min.css')}}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{asset('backend/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('backend/assets/css/font-awesome.css')}}'" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('backend/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('backend/assets/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('backend/assets/js/Lightweight-Chart/cssCharts.css')}}">
</head>

<body>
<div id="wrapper">
@include('backend.core.layouts.header')

    <!--/. NAV TOP  -->
  @include('backend.core.layouts.sidebar')
    <!-- /. NAV SIDE  -->

    @yield('content')
    @include('backend.core.layouts.footer ')
</div>
    <!-- /. PAGE WRAPPER  -->

</div>

<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="{{asset('backend/assets/js/jquery-1.10.2.js')}}"></script>

<!-- Bootstrap Js -->
<script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('backend/assets/materialize/js/materialize.min.js')}}"></script>

<!-- Metis Menu Js -->
<script src="{{asset('backend/assets/js/jquery.metisMenu.js')}}"></script>
<!-- Morris Chart Js -->
<script src="{{asset('backend/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('backend/assets/js/morris/morris.js')}}"></script>


<script src="{{asset('backend/assets/js/easypiechart.js')}}"></script>
<script src="{{asset('backend/assets/js/easypiechart-data.js')}}"></script>

<script src="{{asset('backend/assets/js/Lightweight-Chart/jquery.chart.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('backend/assets/js/custom-scripts.js')}}"></script>


</body>

</html>
