@extends('layouts.adminbase')

@section('title','Nodde Admin Panel')


@section('content')
    <div class="main-panel">
        <div class="card">
            <form action="/admin/comments/update/{{$data->id}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="squareInput">yorum</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->comment}}"  name="comment" required>
                    </div>
                    <div class="form-group">
                        <label for="squareInput">user_id</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->user_id}}"  name="user_id" required>
                    </div>
                    <div class="form-group">
                        <label for="squareInput">noddes_id</label>
                        <input type="text" class="form-control input-square" id="squareInput" value="{{$data->noddes_id}}"  name="noddes_id" required>
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
