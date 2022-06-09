@extends('layouts.adminbase')

@section('title','İletisim Admin Panel')


@section('content')
    <div class="card" style="width: 70%; margin-left: 20%">
        <div class="card-header">
            <div class="card-title">Responsive Table</div>
        </div>
        <div class="card-body">
            <div class="card-sub">
                <h3>İletisim List</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>konu</th>
                        <th>mesaj</th>
                        <th>ip</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->message}}</td>
                            <td>{{$rs->ip}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="/admin/category/destroy/{{$rs->id}}/">Delete</a></td>
                            <td><a href="/admin/category/show/{{$rs->id}}/">Show</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
