@if (session('admin'))

@extends('layouts.app')

@section('title-block')Редактирование@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Редактирование товара {{$data->name}}</p>
    </div>
@endsection

@section('content')
    <form class="row g-3 needs-validation" novalidate="" action="{{route('special-update-submit', $data->id) }}" method="post">
        {{ csrf_field() }}
        <div class ="col-md-6">
            <div class="col-md-12 position-relative mb-2">
                <label for="validationTooltip01" class="form-label">Название товара:</label>
                <input type="text" class="form-control"  name="name" id="validationTooltip01" value="{{$data->name}}" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 position-relative mb-2">
                <label for="validationTooltip01" class="form-label">Название товара:</label>
                <input type="text" class="form-control"  name="img" id="validationTooltip01" value="{{$data->img}}" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 position-relative mb-2">
                <label for="validationTooltip02" class="form-label">Цена:</label>
                <input type="text" class="form-control" name="price" id="validationTooltip02" value="{{$data->price}}" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <label for="lastName" class="form-label">Краткое Описание товара:</label>
                <textarea class="form-control" id="lastName" name="shortdesc" rows="4" cols="30">{{$data->shortdesc}}</textarea>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
        </div>
        <div class ="col-md-6">
            <div class="col-md-12 mb-2">
                <label for="lastName" class="form-label">Описание товара:</label>
                <textarea class="form-control" id="lastName" name="description" rows="20" cols="60">{{$data->description}}</textarea>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
        </div>
        <div class="col-12 mb-5">
            <button class="btn btn-success" type="submit">Редактировать</button>
        </div>
    </form>
@endsection

@section('aside')
    @parent
    <p>Тут инфа про заказ</p>
@endsection

@endif
