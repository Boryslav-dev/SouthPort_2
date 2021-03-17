@extends('layouts.app')

@section('title-block')Заказ@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Заказать товар или услугу</p>
    </div>
@endsection

@section('content')
    <form class="row g-3 needs-validation" novalidate="" action="/contact/submit" method="post">
    <div class ="col-md-6">
        <div class="col-md-12 position-relative mb-2">
            <label for="validationTooltip01" class="form-label">ИМЯ</label>
            <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 position-relative mb-2">
            <label for="validationTooltip02" class="form-label">ТЕЛЕФОН</label>
            <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 position-relative mb-2">
            <label for="validationTooltip01" class="form-label">ПОЧТА</label>
            <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
    </div>
    <div class ="col-md-6">
        <div class="col-md-12 mb-2">
            <label for="lastName" class="form-label">СООБЩЕНИЕ</label>
            <textarea class="form-control" id="lastName" name="yit_contact[message]" rows="4" cols="30"></textarea>
            <div class="invalid-feedback">
                Valid last name is required.
            </div>
        </div>
        <div class="col-md-12 input-group position-relative mb-2">
            <label class="form-label">ЗАГРУЗИТЬ ФАЙЛЫ</label>
        </div>
        <div class="col-md-12 input-group">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
