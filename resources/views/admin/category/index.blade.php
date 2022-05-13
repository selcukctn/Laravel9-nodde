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
                        <th>Main Category</th>
                        <th>Title</th>
                        <th>Keywords</th>
                        <th>Description</th>
                        <th>Image</th>
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
                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->keywords}}</td>
                        <td>{{$rs->description}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" width="50" height="50">
                            @endif
                        </td>
                        <td>{{$rs->status}}</td>
                        <td><a href="/admin/category/edit/{{$rs->id}}/">Edit</a></td>
                        <td><a href="/admin/category/destroy/{{$rs->id}}/" onclick="return confirm('Silmek istediğine emin misin?')">Delete</a></td>
                        <td><a href="/admin/category/show/{{$rs->id}}/">Show</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-action">
            <a href="/admin/category/create" class="btn btn-success">Kategori Ekle</a>
        </div>
    </div>


@endsection
