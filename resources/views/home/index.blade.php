@extends('layouts.frontbase')

@section('title','Nodde')



@section('content')
    <div class="content_header">
        <h2>Son Paylaşılanlar</h2>
    </div>
    <div style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
        <div class="content_container">
            <div class="content_info">
                  <span class="content_userarea">
                    <a href="url"><p>username</p></a>
                  </span>
            </div>
            <div class="content_desc">
                <a href="url"><h4>Başlık</h4></a>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit adipisci,
                    reprehenderit quod eos molestias assumenda amet natus quos iusto
                    repudiandae autem accusamus commodi neque,
                    impedit tenetur saepe! Ipsam, impedit quas?
                </p>
            </div>
        </div>
    </div>
    <div class="buttons_area" style="margin-bottom:10px;width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
        <button >Tümünü Gör</button>
        <a href="/createpost" class="nav-link px-2 text-white"><button type="button" class="btn btn-warning">Paylaş</button></a>
    </div>

@endsection
