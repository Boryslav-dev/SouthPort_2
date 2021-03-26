@extends('layouts.app')

@section('title-block')Заказ@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Заказать товар или услугу</p>
    </div>
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <form class="row g-3 needs-validation" action="{{route('order-send')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class ="col-md-6">
        <div class="col-md-12 position-relative mb-2">
            <label for="validationTooltip01" class="form-label">ИМЯ</label>
            <input type="text" class="form-control" id="validationTooltip01" name="name" value="Mark" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 position-relative mb-2">
            <label for="validationTooltip02" class="form-label">ТЕЛЕФОН</label>
            <input type="text" class="form-control" id="validationTooltip02" name="tel" value="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 position-relative mb-2">
            <label for="validationTooltip01" class="form-label">ПОЧТА</label>
            <input type="text" class="form-control" id="validationTooltip01" name="email" value="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
    </div>
    <div class ="col-md-6">
        <div class="col-md-12 mb-2">
            <label for="lastName" class="form-label">СООБЩЕНИЕ</label>
            <textarea class="form-control" id="lastName" name="message" rows="4" cols="30"></textarea>
            <div class="invalid-feedback">
                Valid last name is required.
            </div>
        </div>
        <div class="col-md-12 input-group position-relative mb-2">
            <label class="form-label">ЗАГРУЗИТЬ ФАЙЛЫ</label>
        </div>
        <div class="col-md-12 input-group">
            <input type="file" class="form-control" id="inputGroupFile01" name="file" accept=".pdf, .doc, .docx" size="">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
        </div>
    </div>
        <div class="col-12 mb-5">
            <button class="btn btn-success" type="submit">ОТПРАВИТЬ СООБЩЕНИЕ</button>
        </div>
    </form>
@endsection

@section('aside')
    @parent
    <p>Тут инфа про заказ</p>
@endsection
