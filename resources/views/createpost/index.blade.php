@extends('layouts.createpost')

@section('title','Paylaş')



@section('create-area')
    <form action="/admin/noddes/store" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <p class='field required'>
            <label class='label required' for='name'>username</label>
            <input class='text-input' id='name' name='name' required type='text' value=''>
        </p>
        <p class='field required half'>
            <label class='label' for='email'>E-mail</label>
            <input class='text-input' id='email' name='email' required type='email'>
        </p>
        <div class='field'>
            <label class='label'>Kategori Seç</label>
            <ul class='options'>
                @foreach($datalist as $rl)
                    <li class='option'>
                        <input class='option-input' id='option-{{$rl->id}}' name="category_id" type='radio'>
                        <label class='option-label' for='option-{{$rl->id}}'>{{$rl->title}}</label>
                    </li>
                @endforeach
            </ul>
        </div>
        <p class='field'>
            <label class='label' for='about'>Başlık</label>
            <textarea class='textarea' cols='50' id='about' name="title" rows='4'></textarea>
        </p>
        <p class='field'>
            <label class='label' for='about'>Açıklama</label>
            <textarea class='textarea' cols='50' id='about' name="description" rows='4'></textarea>
        </p>
        <p class='field'>
            <label class='label' for='about'>Detaylar</label>
            <textarea class='textarea' cols='50' id='about' name="detail" rows='4'></textarea>
        </p>
        <p class='field'>
            <label class='label' for='about'>Anahtar Kelimeler</label>
            <textarea class='textarea' cols='50' id='about' name="detail" rows='1'></textarea>
        </p>
        <div class="formupload">
            <input class="formuploadinput" type="file" multiple name="file">
            <p class="formuploadp">Drag your files here or click in this area.</p>
        </div>
        <p class='field half'>
            <input class='button' type='submit' value='Send'>
        </p>
    </form>
@endsection
