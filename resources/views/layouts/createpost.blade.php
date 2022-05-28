<!DOCTYPE html>
<html lang="tr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/ready.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <link rel="icon" type="image/x-icon" href="../../img/favicon.png" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/x-icon"/>
    <link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/component.css') }}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <style>
        .logo{
            object-fit: contain;
            width: 200px;
            height: 32px;
            margin-left: -33px;
        }
        .btn.btn-warning{
            background-color: green;
            border-color: green;
            color: white;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    @livewireStyles
    @yield('head')
</head>
@include('home.header')

@section('content')

@show



<body>








<script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/core/popper.min.js')}}"></script>
<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugin/chartist/chartist.min.js')}}"></script>
<script src="{{asset('js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
<script src="{{asset('js/plugin/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('js/plugin/jquery-mapael/maps/world_countries.min.js')}}"></script>
<script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>
<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('js/ready.min.js')}}"></script>
<script src="{{asset('js/js/demo.js')}}"></script>
</body>






</html>
