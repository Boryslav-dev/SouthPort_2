@extends('layouts.app')

@section('title-block')Съемники@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Съемники</p>
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
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-9">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('img/s1.jpg')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Съемник механический с тремя захватами:</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class="align-middle" rowspan="2" scope="col">#</th>
                                            <th class="align-middle" rowspan="2" scope="col">Модель</th>
                                            <th colspan="2" scope="col">Область расширения</th>
                                            <th class="align-middle" rowspan="2" scope="col">Глубина захвата</th>
                                        </tr>
                                        <tr>
                                            <td>мин.(мм)</td>
                                            <td>макс.(мм)</td>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>СМ 0703 А3</td>
                                            <td class="align-middle">15</td>
                                            <td class="align-middle">80</td>
                                            <td class="align-middle">100</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0703 А3">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>СМ 0703 А4</td>
                                            <td class="align-middle">20</td>
                                            <td class="align-middle">110</td>
                                            <td class="align-middle">120</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0703 А4">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>СМ 0703 А6</td>
                                            <td class="align-middle">25</td>
                                            <td class="align-middle">160</td>
                                            <td class="align-middle">150</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0703 А6">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>СМ 0703 А8</td>
                                            <td class="align-middle">30</td>
                                            <td class="align-middle">210</td>
                                            <td class="align-middle">185</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0703 А8">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>СМ 0703 А10</td>
                                            <td class="align-middle">30</td>
                                            <td class="align-middle">260</td>
                                            <td class="align-middle">205</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0703 А10">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>СМ 0703 А12</td>
                                            <td class="align-middle">50</td>
                                            <td class="align-middle">310</td>
                                            <td class="align-middle"></td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0703 А12">Заказать</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-9">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('img/s2.jpg')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Съемник механический с двумя захватами:</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class="align-middle" rowspan="2" scope="col">#</th>
                                            <th class="align-middle" rowspan="2" scope="col">Модель</th>
                                            <th colspan="2" scope="col">Область расширения</th>
                                            <th class="align-middle" rowspan="2" scope="col">Глубина захвата</th>
                                        </tr>
                                        <tr>
                                            <td>мин.(мм)</td>
                                            <td>макс.(мм)</td>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>СМ 0804 А1</td>
                                            <td class="align-middle">25-80</td>
                                            <td class="align-middle">70-180</td>
                                            <td class="align-middle">100</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0804 А1">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>СМ 0804 А2</td>
                                            <td class="align-middle">25-130</td>
                                            <td class="align-middle">80-180</td>
                                            <td class="align-middle">100</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0804 А2">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>СМ 0804 А3</td>
                                            <td class="align-middle">50-160</td>
                                            <td class="align-middle">105-220</td>
                                            <td class="align-middle">150</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0804 А3">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>СМ 0804 А4</td>
                                            <td class="align-middle">60-200</td>
                                            <td class="align-middle">120-270</td>
                                            <td class="align-middle">150</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0804 А4">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>СМ 0804 А5</td>
                                            <td class="align-middle">80-250</td>
                                            <td class="align-middle">160-330</td>
                                            <td class="align-middle">205</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0804 А5">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>СМ 0804 А6</td>
                                            <td class="align-middle">80-350</td>
                                            <td class="align-middle">160-420</td>
                                            <td class="align-middle">205</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0804 А6">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>СМ 0804 А7</td>
                                            <td class="align-middle">100-450</td>
                                            <td class="align-middle">195-600</td>
                                            <td class="align-middle">205</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0804 А7">Заказать</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-9">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('img/s3.jpg')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Съемник механический на три захвата с антискользящим устройством:</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class="align-middle" rowspan="2" scope="col">#</th>
                                            <th class="align-middle" rowspan="2" scope="col">Модель</th>
                                            <th colspan="2" scope="col">Область расширения</th>
                                            <th class="align-middle" rowspan="2" scope="col">Глубина захвата</th>
                                        </tr>
                                        <tr>
                                            <td>мин.(мм)</td>
                                            <td>макс.(мм)</td>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>СМ 0700 АC5T</td>
                                            <td class="align-middle">21</td>
                                            <td class="align-middle">102</td>
                                            <td class="align-middle">110</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0700 АC5T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>СМ 0700 АC10T</td>
                                            <td class="align-middle">25</td>
                                            <td class="align-middle">215</td>
                                            <td class="align-middle">160</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0700 АC10T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>СМ 0700 АC15T</td>
                                            <td class="align-middle">20</td>
                                            <td class="align-middle">355</td>
                                            <td class="align-middle">203</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0700 АC15T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>СМ 0700 АC20T</td>
                                            <td class="align-middle">22</td>
                                            <td class="align-middle">390</td>
                                            <td class="align-middle">250</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0700 АC20T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>СМ 0700 АC30T</td>
                                            <td class="align-middle">20</td>
                                            <td class="align-middle">460</td>
                                            <td class="align-middle">305</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СМ 0700 АC30T">Заказать</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-9">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('img/s4.jpg')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Съемник гидравлический унифицированный с антискользящим устройством:</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class="align-middle" rowspan="2" scope="col">#</th>
                                            <th class="align-middle" rowspan="2" scope="col">Модель</th>
                                            <th colspan="2" scope="col">Область расширения</th>
                                            <th class="align-middle" rowspan="2" scope="col">Глубина захвата</th>
                                        </tr>
                                        <tr>
                                            <td>мин.(мм)</td>
                                            <td>макс.(мм)</td>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>СГ 710 U АC5T</td>
                                            <td class="align-middle">21</td>
                                            <td class="align-middle">122</td>
                                            <td class="align-middle">70</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 710 U АC5T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>СГ 710 U АC10T</td>
                                            <td class="align-middle">27</td>
                                            <td class="align-middle">177</td>
                                            <td class="align-middle">90</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 710 U АC10T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>СГ 710 U АC15T</td>
                                            <td class="align-middle">33</td>
                                            <td class="align-middle">300</td>
                                            <td class="align-middle">100</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 710 U АC15T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>СГ 710 U АC20T</td>
                                            <td class="align-middle">36</td>
                                            <td class="align-middle">300</td>
                                            <td class="align-middle">110</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 710 U АC20T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>СГ 710 U АC30T</td>
                                            <td class="align-middle">27</td>
                                            <td class="align-middle">455</td>
                                            <td class="align-middle">304</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 710 U АC30T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>СГ 710 U АC50T</td>
                                            <td class="align-middle">76</td>
                                            <td class="align-middle">635</td>
                                            <td class="align-middle">355</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 710 U АC50T">Заказать</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-9">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('img/s5.jpg')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Съемник гидравлический раздельный:</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class="align-middle" rowspan="2" scope="col">#</th>
                                            <th class="align-middle" rowspan="2" scope="col">Модель</th>
                                            <th colspan="2" scope="col">Область расширения</th>
                                            <th class="align-middle" rowspan="2" scope="col">Глубина захвата</th>
                                        </tr>
                                        <tr>
                                            <td>мин.(мм)</td>
                                            <td>макс.(мм)</td>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>СГ 0902S 10T</td>
                                            <td class="align-middle">19</td>
                                            <td class="align-middle">35</td>
                                            <td class="align-middle">100</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 0902S 10T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>СГ 0902S 20T</td>
                                            <td class="align-middle">20</td>
                                            <td class="align-middle">390</td>
                                            <td class="align-middle">160</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 0902S 20T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>СГ 0902S 30T</td>
                                            <td class="align-middle">27</td>
                                            <td class="align-middle">445</td>
                                            <td class="align-middle">245</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 0902S 30T">Заказать</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>СГ 0902S 50T</td>
                                            <td class="align-middle">76</td>
                                            <td class="align-middle">650</td>
                                            <td class="align-middle">355</td>
                                            <td><button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever="СГ 0902S 50T">Заказать</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-9">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('img/s6.jpg')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Съемник гидравлический (набор) СГН 709/23 с 4" 6" и 8" захватами</h5>
                            </div>
                            <button type="button" class="btn-sm btn-success green" data-toggle="modal" data-target="#exampleModal" data-sb-whatever='СГН 709/23 с 4" 6" и 8"'>Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('aside')
    @parent
    <div class="nav flex-column">
        <a href="/mechanicalres" class="nav-link border-bottom border-success pl-0 green">Подшипники</a>
        <a href="/rte" class="nav-link border-bottom border-success pl-0 green">РТИ</a>
        <a href="/linearsupp" class="nav-link border-bottom border-success pl-0 green">Линейные опоры</a>
        <a href="/induct" class="nav-link border-bottom border-success pl-0 green">Индукционные нагреватели</a>
        <a href="/pullers" class="nav-link pl-0 green">Съёмники</a>
    </div>
@endsection

@section('model')
    @parent
    {{url('pullers/send')}}
@endsection
