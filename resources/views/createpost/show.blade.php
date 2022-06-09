@extends('layouts.catagory')

@section('title','Kategoriler')



@section('content-area')
    <div class="content_header">
        <h2>{{$data->title}}</h2>
    </div>
        <div style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
            <div class="content_container">
                <div class="content_info">
                  <span class="content_userarea">
                    <a href="url"><p>username</p></a>
                  </span>
                </div>
                <div class="content_desc">
                    <a href="url"><h4>{{$data->title}}</h4></a>
                    <p>{{$data->detail}}
                    </p>
                </div>
            </div>
        </div>
    <div class="buttons_area" style="margin-bottom:10px;width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
        <button >Tümünü Gör</button>
        <a href="/createpost" class="nav-link px-2 text-white"><button type="button" class="btn btn-warning">Paylaş</button></a>
    </div>
@endsection
