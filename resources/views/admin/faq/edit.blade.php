@extends('layouts.adminbase')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="main-panel">
        <div class="card">
            <form action="/admin/faq/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="squareInput">Sorular</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->question}}"  name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Cevap</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->answer}}" name="description">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gizle-Göster</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>


@endsection
