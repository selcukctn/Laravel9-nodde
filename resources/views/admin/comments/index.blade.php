@extends('layouts.adminbase')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="card" style="width: 70%; margin-left: 20%">
        <div class="card-header">
            <div class="card-title">Responsive Table</div>
        </div>
        <div class="card-body">
            <div class="card-sub">
                <h3>Comments List</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Comment</th>
                        <th>Noddes id</th>
                        <th>User id</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->comment}}</td>
                        <td>{{$rs->noddes_id}}</td>
                        <td>{{$rs->user_id}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="/admin/comments/edit/{{$rs->id}}/">Edit</a></td>
                        <td><a href="/admin/comments/destroy/{{$rs->id}}/">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
