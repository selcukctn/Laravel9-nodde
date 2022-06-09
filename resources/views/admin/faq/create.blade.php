@extends('layouts.adminbase')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Kategori Olustur</div>
            </div>
            <form action="/admin/faq/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="squareInput">Soru</label>
                        <input type="text" class="form-control input-square" id="squareInput" placeholder="Soru" name="question" required>
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Açıklama</label>
                        <input type="text" class="form-control input-square" id="squareInput" placeholder="Açıklama" name="answer">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gizle-Göster</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" type="submit">Kaydet</button>
                </div>
            </form>
        </div>
    </div>


@endsection
