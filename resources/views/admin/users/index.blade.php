@extends('layouts.adminbase')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="card" style="width: 70%; margin-left: 20%">
        <div class="card-header">
            <div class="card-title">Responsive Table</div>
        </div>
        <div class="card-body">
            <div class="card-sub">
                <h3>Users List</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->role}}</td>
                        <td><a href="/admin/users/edit/{{$rs->id}}/">Edit</a></td>
                        <td><a href="/admin/users/destroy/{{$rs->id}}/">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-action">
            <a href="/admin/noddes/create" class="btn btn-success">Nodde Ekle</a>
        </div>
    </div>


@endsection
