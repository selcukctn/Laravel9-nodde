@extends('layouts.createpost')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-header">
                <div class="card-title">{{$data->title}} Düzenle</div>
            </div>
            <form action="/admin/category/destroy/{{$data->id}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="squareInput">Kategori Adı</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->title}}"  name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Açıklama</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->description}}" name="description">
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Anahtar Kelimeler</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->keywords}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gizle-Göster</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Resim Seç</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>


@endsection
