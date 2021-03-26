@extends('layouts.app')

@section('title-block'){{$data->name}}@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="pl-5">
        <h2>{{$data->name}}</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="img border border-secondary border-2 p-2">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/storage/' . $data->img)}}" tabindex="0" class="d-block w-100" alt="{{$data->name}}">
                            </div>
                                @foreach($photo as $key)
                                    <div class="carousel-item">
                                        <img src="{{asset('/storage/' . $key->filename)}}" tabindex="0" class="d-block w-100" alt="{{$data->name}}">
                                    </div>
                                @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="d-grid gap-2 order mb-5 mt-3">
                    <div class="row">
                       <div class="col-6">
                           <p class="h3 mt-4">{{$data->price}}.грн</p>
                       </div>
                        <div class="col-6">
                            <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='{{$data->name}}'>Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p>{{$data->description}}</p>
            </div>
        </div>
    </div>
@endsection

@section('aside')
    @parent
@endsection

@section('model')
    @parent
    {{url('special-submit')}}
@endsection
