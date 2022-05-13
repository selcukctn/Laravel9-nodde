<div class="right_container">
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
    <div class="content_header">
        <h2>Son Paylaşılanlar</h2>
    </div>
    @foreach($data as $rs)
        <div style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
            <div class="content_container">
                <div class="content_info">
                  <span class="content_userarea">
                    <a href="url"><p>username</p></a>
                  </span>
                </div>
                <div class="content_desc">
                    <a href="url"><h4>{{$rs->title}}</h4></a>
                    <p>{{$rs->detail}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    <div class="buttons_area" style="margin-bottom:10px;width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
        <button >Tümünü Gör</button>
        <a href="/createpost" class="nav-link px-2 text-white"><button type="button" class="btn btn-warning">Paylaş</button></a>
    </div>
    <!--Content End-->
</div>
