<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="stylesheet" href="{{ asset('css/iletisimform.css') }}">
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
</head>
<body>
@include('home.header')
<div class="container">
    <div class="row input-container">
        <form action="admin/iletisim/store" method="post" enctype="multipart/form-data">
            @csrf
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" required name="name"/>
                <label>İsim</label>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required name="email"/>
                <label>Email</label>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input type="text" required name="phone"/>
                <label>Telefon Numarası</label>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required name="subject"/>
                <label>Konu</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="styled-input wide">
                <textarea required name="message"></textarea>
                <label>Mesaj</label>
            </div>
        </div>
        <div class="col-xs-12">
            <button class="btn btn-success" type="submit">Gönder</button>
        </div>
        </form>
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
</body>
</html>
