@extends('layouts.adminbase')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="main-panel">
        <div class="card">
            <form action="/admin/users/update/{{$data->id}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="squareInput">username</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->name}}"  name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gizle-Göster</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="role" required>
                            <option selected>{{$data->status}}</option>
                            <option>Admin</option>
                            <option>Normal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="squareInput">email</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->email}}" name="email">
                    </div>
                    <div class="form-group">
                        <label for="squareInput">password</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->password}}" name="password">
                    </div>

                </div>
                <div class="card-action">
                    <button class="btn btn-success" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </div>


@endsection
