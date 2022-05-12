<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodde @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <link href="{{ asset('css/kategori.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/createPostPage.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
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
    </style>
    @livewireStyles
    @yield('head')
</head>

<body>
<form action='' class='form'>
    <p class='field required'>
        <label class='label required' for='name'>username</label>
        <input class='text-input' id='name' name='name' required type='text' value=''>
    </p>
    <p class='field required half'>
        <label class='label' for='email'>E-mail</label>
        <input class='text-input' id='email' name='email' required type='email'>
    </p>
    <div class='field'>
        <label class='label'>Kategori Seç</label>
        <ul class='options'>
            <li class='option'>
                <input class='option-input' id='option-0' name='option' type='radio' value='0'>
                <label class='option-label' for='option-0'>React</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-1' name='option' type='radio' value='1'>
                <label class='option-label' for='option-1'>Vue</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-2' name='option' type='radio' value='2'>
                <label class='option-label' for='option-2'>Angular</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-3' name='option' type='radio' value='3'>
                <label class='option-label' for='option-3'>Riot</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-4' name='option' type='radio' value='4'>
                <label class='option-label' for='option-4'>Polymer</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-5' name='option' type='radio' value='5'>
                <label class='option-label' for='option-5'>Ember</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-6' name='option' type='radio' value='6'>
                <label class='option-label' for='option-6'>Meteor</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-7' name='option' type='radio' value='7'>
                <label class='option-label' for='option-7'>Knockout</label>
            </li>
        </ul>
    </div>
    <p class='field'>
        <label class='label' for='about'>Açıklama</label>
        <textarea class='textarea' cols='50' id='about' name='about' rows='4'></textarea>
    </p>
    <div class="formupload">
        <input class="formuploadinput" type="file" multiple>
        <p class="formuploadp">Drag your files here or click in this area.</p>
    </div>
    <p class='field half'>
        <input class='button' type='submit' value='Send'>
    </p>
</form>

<script src="{{asset('js/sidebars.js')}}"></script>
<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
