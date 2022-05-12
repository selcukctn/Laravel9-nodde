@extends('layouts.createpost')

@section('title','Paylaş')



@section('create-area')
    <form action='' class='form'>
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
                <li class='option'>
                    <input class='option-input' id='option-0' name='option' type='radio' value='0'>
                    <label class='option-label' for='option-0'>React</label>
                </li>
                <li class='option'>
                    <input class='option-input' id='option-1' name='option' type='radio' value='1'>
                    <label class='option-label' for='option-1'>Vue</label>
                </li>
                <li class='option'>
                    <input class='option-input' id='option-2' name='option' type='radio' value='2'>
                    <label class='option-label' for='option-2'>Angular</label>
                </li>
                <li class='option'>
                    <input class='option-input' id='option-3' name='option' type='radio' value='3'>
                    <label class='option-label' for='option-3'>Riot</label>
                </li>
                <li class='option'>
                    <input class='option-input' id='option-4' name='option' type='radio' value='4'>
                    <label class='option-label' for='option-4'>Polymer</label>
                </li>
                <li class='option'>
                    <input class='option-input' id='option-5' name='option' type='radio' value='5'>
                    <label class='option-label' for='option-5'>Ember</label>
                </li>
                <li class='option'>
                    <input class='option-input' id='option-6' name='option' type='radio' value='6'>
                    <label class='option-label' for='option-6'>Meteor</label>
                </li>
                <li class='option'>
                    <input class='option-input' id='option-7' name='option' type='radio' value='7'>
                    <label class='option-label' for='option-7'>Knockout</label>
                </li>
            </ul>
        </div>
        <p class='field'>
            <label class='label' for='about'>Açıklama</label>
            <textarea class='textarea' cols='50' id='about' name='about' rows='4'></textarea>
        </p>
        <div class="formupload">
            <input class="formuploadinput" type="file" multiple>
            <p class="formuploadp">Drag your files here or click in this area.</p>
        </div>
        <p class='field half'>
            <input class='button' type='submit' value='Send'>
        </p>
    </form>
@endsection
