<style>
    .mySlides {display: none}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
    }
</style>
<div class="right_container" style="margin-top: 3%">
    <nav>
        <div class="navbar hidden_pc">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="logo">
                    <h1>Nodde</h1>
                </div>
                <div class="menu-items">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">blogs</a></li>
                    <li><a href="#">portfolio</a></li>
                    <li><a href="#">contact</a></li>
                </div>
            </div>
        </div>
    </nav>
    <!--Content Start-->
    <div class="slideshow-container">

        @foreach($data as $rs)
            @if(!strpos($rs->file,'.pd'))
                <div class="mySlides fade">
                    @if($rs->file)
                        <img src="{{Storage::url($rs->file)}}" style="width:30%; height: 30%; margin-left: 40%; position:relative; display: block; z-index: 10;">
                    @endif
                </div>
            @endif
                @endforeach

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>


    <div class="content_header">
        <h2 style="margin-top: 30%;">Son Paylaşılanlar</h2>
    </div>
<div style="margin-top: 20%;">
    @foreach($data as $rs)
        @if($rs->status)
            <div style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
                <div class="content_container">
                    <div class="content_desc">
                        <a href="/createpost/show/{{$rs->id}}"><h4>{{$rs->title}}</h4></a>
                        <p>{{$rs->detail}}</p>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    <div class="buttons_area" style="margin-bottom:10px;width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
        <a href="/createpost" class="nav-link px-2 text-white"><button type="button" class="btn btn-warning">Paylaş</button></a>
    </div>
</div>

    <!--Content End-->
</div>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>
