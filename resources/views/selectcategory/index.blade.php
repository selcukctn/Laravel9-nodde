<link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/x-icon"/>
<link href="{{ asset('css/kategori.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/homepage.css') }}" rel="stylesheet" type="text/css"/>
<style>
    body{
        display: flex;
        flex-direction: column;
    }
    .content_container{
        width: 40%;
        height: 40%;
        border:solid;
        border-width: 1px;
        border-color:#43853d;
        margin-top: 4%;
        margin-bottom: 2%;
        display: flex;
        flex-direction: row;
    }
</style>
    @foreach($data as $rs)
        @if($rs->id==$catId)
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
        @endif
    @endforeach
    <div class="buttons_area" style="margin-bottom:10px;width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
        <a href="/createpost" class="nav-link px-2 text-white"><button type="button" class="btn btn-warning">Paylaş</button></a>
    </div>
    <!--Content End-->
</div>
