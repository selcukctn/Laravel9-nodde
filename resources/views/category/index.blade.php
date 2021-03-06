@extends('layouts.catagory')

@section('title','Kategoriler')



@section('content-area')
    <div class="content_header">
        <h2>Son Paylaşılanlar</h2>
    </div>
    @foreach($data as $rs)
        <div style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
            <div class="content_container">
                <div class="content_desc">
                    <a href="/createpost/show/{{$rs->id}}"><h4>{{$rs->title}}</h4></a>
                    <p>{{$rs->detail}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    <div class="buttons_area" style="margin-bottom:10px;width: 100%; height: auto; justify-content: center; align-items: center; display: flex;">
        <a href="/createpost" class="nav-link px-2 text-white"><button type="button" class="btn btn-warning">Paylaş</button></a>
    </div>
@endsection
