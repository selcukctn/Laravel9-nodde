@extends('layouts.adminbase')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="card" style="width: 70%; margin-left: 20%;">
        <div class="card-header" style="margin-top: 5%;">
            <div class="card-title">{{$data->title}}</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Açıklama</th>
                        <th>Anahtar Kelimeler</th>
                        <th>Durum</th>
                        <th>Resim</th>
                        <th>Düzenle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$data->description}}</td>
                        <td>{{$data->keywords}}</td>
                        <td>{{$data->status}}</td>
                        <td>Table cell</td>
                        <td><div class="card-action">
                                <a href="/admin/category/edit/{{$data->id}}" class="btn btn-success">Düzenle</a>
                            </div></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
