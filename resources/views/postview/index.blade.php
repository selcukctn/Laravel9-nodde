@extends('layouts.catagory')

@section('title','Nodde')
<style>
    .pop{
        width: 100%;
        height: 100%;
        display: block;
        position:absolute;
    }
    .normal{
        width: 20%;
        height:30%;
        margin-left: 43%;
        margin-top: 20px;
        position:absolute;
    }
    .none{
        display: none;
    }
    .v{
        flex-direction: column;
    }
    .n{
        width: 100%;
        height: auto;
        justify-content: center;
        align-items: center;
        display: flex;
        margin-top: 20%;
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="v" id="b">
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

    <div class="n" id="a">
        <div class="content_container">
            <div class="content_desc">
                @foreach($nod as $nod)
                    @if($nod->user_id==0)
                        <h4>Guest | Rate: {{$nod->rate}}</h4>
                    @else

                        <h4  id="h4"> {{$nod->user->name}} | Rate: {{$nod->rate}}</h4>
                    @endif
                    <p>{{$nod->comment}}</p>
                @endforeach
                <div class="container">
                    <form action="{{route('storecomment')}}" method="post" enctype="multipart/form-data">
                        @csrf
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
@endsection

</body>

<script type="text/javascript">
    let flag=0;
    function getVal() {
        if(flag==0){
            flag=1;
            document.getElementById("imageharrik").className="pop"
            document.getElementById("a").className="none"
            console.log(document.getElementById("imageharrik").className);
            //let b=document.getElementById("h4").valueOf();
            //document.getElementById("h4").valueOf(b.innerHTML.toString().substr(19,b.innerHTML.toString().indexOf(',')-4));
        }
        else{
            flag=0;
            document.getElementById("imageharrik").className="normal"
            document.getElementById("a").className="n"
        }
    }

</script>
