@extends('layouts.adminbase')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="card" style="width: 70%; margin-left: 20%">
        <div class="card-header">
            <div class="card-title">Responsive Table</div>
        </div>
        <div class="card-body">
            <div class="card-sub">
                <h3>Category List</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Soru</th>
                        <th>Cevap</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->question}}</td>
                        <td>{{$rs->answer}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="/admin/faq/edit/{{$rs->id}}/">Edit</a></td>
                        <td><a href="/admin/faq/destroy/{{$rs->id}}/" onclick="return confirm('Silmek istediğine emin misin?')">Delete</a></td>
                        <td><a href="/admin/faq/show/{{$rs->id}}/">Show</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-action">
            <a href="/admin/faq/create" class="btn btn-success">Kategori Ekle</a>
        </div>
    </div>


@endsection
