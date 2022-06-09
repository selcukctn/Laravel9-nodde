@extends('layouts.catagory')

@section('title','Nodde')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    .pop{
        position: absolute;
        width: 70%;
        height: 70%;
        top: 20%;
        left: 20%;
    }
    .normal{
        width: 20%;height:30%;margin-left: 43%;margin-top: 20px;}
    .v{
        flex-direction: column;
    }
    .n{
        width: 100%; height: auto; justify-content: center; align-items: center; display: flex; margin-left: 3%;
        position: absolute;
        bottom: -30%;
    }
    .n2{
        margin-left: 20%;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body class="v">
@section('content')
    @foreach($data as $rs)
        <div class="n2">
    <div style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; margin-left: -10%">
        <div class="content_container">
            <div class="content_desc">
                <h4>{{$rs->title}}</h4>
                <p>{{$rs->detail}}</p>
                @if(!strpos($rs->file,'.pd'))
                    <a onclick="getVal()"><img id="imageharrik" class="normal"src="{{Storage::url($rs->file)}}"></a>
                @else
                    <a href="{{Storage::url($rs->file)}}">Pdf İndir</a>
                @endif
            </div>
        </div>
    </div></div>
    @endforeach
@endsection
</body>

    <div class="n">
        <div class="content_container">
            <div class="content_desc">
                <div class="container">
                    <form action="{{route('storecomment')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="fname">username</label>
                        <label for="country">Oy ver</label>
                        <select id="country" name="rate">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                        <label for="subject">Yorum</label>
                        <textarea id="subject" name="comment" placeholder="Yorumunuzu Yazınız.." style="height:200px"></textarea>
                        <input type="text" name="noddes_id" value="{{$rs->id}}">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    let flag=0;
    function getVal() {
        if(flag==0){
            document.getElementById("imageharrik").className="pop"
            flag=1;
        }
        else{
            document.getElementById("imageharrik").className="pop"
            flag=0;
        }
    }
</script>
