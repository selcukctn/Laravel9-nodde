
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Hakkımızda | Nodde</title>
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
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
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

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
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
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        .cover-container{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-btns .btn,
        .social-btns .btn:before,
        .social-btns .btn .fa {
            transition: all 0.35s;
            transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
        }
        .social-btns .btn:before {
            top: 90%;
            left: -110%;
        }
        .social-btns .btn .fa {
            transform: scale(0.8);
        }
        .social-btns .btn.facebook:before {
            background-color: #3b5998;
        }
        .social-btns .btn.facebook .fa {
            color: #3b5998;
        }
        .social-btns .btn.twitter:before {
            background-color: #3cf;
        }
        .social-btns .btn.twitter .fa {
            color: #3cf;
        }
        .social-btns .btn.google:before {
            background-color: #dc4a38;
        }
        .social-btns .btn.google .fa {
            color: #dc4a38;
        }
        .social-btns .btn.dribbble:before {
            background-color: #f26798;
        }
        .social-btns .btn.dribbble .fa {
            color: #f26798;
        }
        .social-btns .btn.skype:before {
            background-color: #00aff0;
        }
        .social-btns .btn.skype .fa {
            color: #00aff0;
        }
        .social-btns .btn:focus:before,
        .social-btns .btn:hover:before {
            top: -10%;
            left: -10%;
        }
        .social-btns .btn:focus .fa,
        .social-btns .btn:hover .fa {
            color: #fff;
            transform: scale(1);
        }
        .social-btns {
            height: 90px;
            margin: auto;
            font-size: 0;
            text-align: center;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
        .social-btns .btn {
            display: inline-block;
            background-color: #fff;
            width: 15%;
            height: 90px;
            line-height: 90px;
            margin: 0 10px;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
            opacity: 0.99;
        }
        .social-btns .btn:before {
            content: '';
            width: 120%;
            height: 120%;
            position: absolute;
            transform: rotate(45deg);
        }
        .social-btns .btn .fa {
            font-size: 38px;
            vertical-align: middle;
        }

    </style>


    <link href="cover.css" rel="stylesheet">
    @yield('head')
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto " >

    <main class="px-3">
        <h1>Hakkımızda</h1>
        <p class="lead">{{$data->aboutus}}</p>
        <p class="lead">
            <a href="/iletisim" class="btn btn-lg btn-secondary fw-bold border-white bg-dark">İletişime Geç</a>
            <a href="/" class="btn btn-lg btn-secondary fw-bold border-white bg-dark">Anasayfaya Dön</a>
        </p>
    </main>
    <div class="social-btns" style="margin-top:30%;">
        <a class="btn facebook" href="{{$data->facebook}}"><i class="fa fa-facebook">Facebook</i></a>
        <a class="btn twitter" href="{{$data->twitter}}" target="_blank"><i class="fa fa-twitter">Twitter</i></a>
    </div>
</div>

<script src="{{asset('js/sidebars.js')}}"></script>
<script src="{{asset('js/particlesSlideshow.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
