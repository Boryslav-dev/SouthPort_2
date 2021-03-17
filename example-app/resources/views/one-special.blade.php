@extends('layouts.app')

@section('title-block'){{$data->name}}@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <h2>{{$data->name}}</h2>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="img border border-secondary border-2 p-2">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                </div>
                <div class="d-grid gap-2 order mb-5 mt-3">
                    <div class="row">
                       <div class="col-6">
                           <p class="h3 mt-4">{{$data->price}} грн</p>
                       </div>
                        <div class="col-6">
                            <button type="button" class="btn-lg btn-success mt-3" data-toggle="modal" data-target="#exampleModal" data-sb-whatever='{{$data->name}}'>Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <p>{{$data->description}}</p>
            </div>
        </div>
    </div>
@endsection

@section('aside')
    @parent
@endsection
