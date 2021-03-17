@if (session('admin'))

@extends('layouts.app')

@section('title-block')Создание товара@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Создание товара</p>
    </div>
@endsection

@section('content')
    <form class="row g-3 needs-validation" novalidate="" action="{{route('create-submit') }}" method="post">
        {{ csrf_field() }}
        <div class ="col-md-6">
            <div class="col-md-12 input-group position-relative mb-2">
                <label class="form-label">ЗАГРУЗИТЬ ФАЙЛЫ</label>
            </div>
            <div class="col-md-12 input-group">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <div class="col-md-12 position-relative mb-2">
                <label for="validationTooltip01" class="form-label">Название товара:</label>
                <input type="text" class="form-control"  name="name" id="validationTooltip01" value="" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 position-relative mb-2">
                <label for="validationTooltip01" class="form-label">Название товара:</label>
                <input type="text" class="form-control"  name="img" id="validationTooltip01" value="" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 position-relative mb-2">
                <label for="validationTooltip02" class="form-label">Цена:</label>
                <input type="text" class="form-control" name="price" id="validationTooltip02" value="" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <label for="lastName" class="form-label">Краткое Описание товара:</label>
                <textarea class="form-control" id="lastName" name="shortdesc" rows="4" cols="30"></textarea>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
        </div>
        <div class ="col-md-6">
            <div class="col-md-12 mb-2">
                <label for="lastName" class="form-label">Описание товара:</label>
                <textarea class="form-control" id="lastName" name="description" rows="18" cols="30"></textarea>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
        </div>
        <div class="col-12 mb-5">
            <button class="btn btn-success" type="submit">Сохранить</button>
        </div>
    </form>
@endsection

@section('aside')
    @parent
    <p>Тут инфа про заказ</p>
@endsection

@endif
