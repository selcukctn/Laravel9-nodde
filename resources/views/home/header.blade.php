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
                <li><a href="/" class="nav-link px-2 text-secondary">Anasayfa</a></li>
                <li><a href="/category" class="nav-link px-2 text-white">Kategoriler</a></li>
                <li><a href="/iletisim" class="nav-link px-2 text-white">İletişim</a></li>
                <li><a href="/hakkimizda" class="nav-link px-2 text-white">Hakkımızda</a></li>
                <li><a href="/faq" class="nav-link px-2 text-white">FAQ</a></li>
            </div>
        </div>
    </div>
</nav>
<header class="p-3 bg-dark text-white hidden_mobile">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src = "./img/logo.png" alt="nodde" class="logo"/>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-secondary">Anasayfa</a></li>
                <li><a href="/category" class="nav-link px-2 text-white">Kategoriler</a></li>
                <li><a href="/iletisim" class="nav-link px-2 text-white">İletişim</a></li>
                <li><a href="/hakkimizda" class="nav-link px-2 text-white">Hakkımızda</a></li>
                <li><a href="/faq" class="nav-link px-2 text-white">FAQ</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <!--<input type="search" class="form-control form-control-dark" placeholder="Ara..." aria-label="Search">-->
            </form>

            @if(\Illuminate\Support\Facades\Auth::id()==0)
                <div class="text-end">
                    <a href="/login" type="button" class="btn btn-outline-light me-2">Giriş Yap</a>
                    <a href="/register" type="button" class="btn btn-outline-light me-2">Kayıt ol</a>
                </div>
            @else
                <div class="text-end">
                    <a href="/dashboard" type="button" class="btn btn-outline-light me-2">{{\Illuminate\Support\Facades\Auth::user()->name}} | Profile Git</a>
                </div>
            @endif
        </div>
    </div>
</header>
