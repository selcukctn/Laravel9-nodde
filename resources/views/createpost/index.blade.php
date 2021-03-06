@extends('layouts.createpost')

@section('title','Create Post')


@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Nodde Olustur</div>
            </div>
            <form action="createpost/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="squareInput">Main Kategori Adı</label>
                        <select class="from-control select2" name="category_id">
                            <option value="0" selected="selected">Main Kategori</option>
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Nodde Adı</label>
                        <input type="text" class="form-control input-square" id="squareInput" placeholder="Nodde Adı..." name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Açıklama</label>
                        <input type="text" class="form-control input-square" id="squareInput" placeholder="Nodde Açıklaması..." name="description">
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Detaylar</label>
                        <input type="text" class="form-control input-square" id="squareInput" placeholder="Nodde Detaylar..." name="detail">
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Anahtar Kelimeler</label>
                        <input type="text" class="form-control input-square" id="squareInput" placeholder="Anahtar Kelime" name="keywords">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Dosya Seç</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" type="submit">Kaydet</button>
                </div>
            </form>
        </div>
    </div>


@endsection
