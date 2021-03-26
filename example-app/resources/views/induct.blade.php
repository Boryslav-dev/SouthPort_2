@extends('layouts.app')

@section('title-block')Индукционные нагреватели@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Индукционные нагреватели</p>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Индукционный нагреватель IH-2.0</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="2" scope="col">Основные параметры</th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th>Мощность, КВт</th>
                                            <td> 2,0 </td>
                                        </tr>
                                        <tr>
                                            <th>Напряжение/Ток</th>
                                            <td> 220V/9A </td>
                                        </tr>
                                        <tr>
                                            <th>Частота</th>
                                            <td> 51/60Hz  </td>
                                        </tr>
                                        <tr>
                                            <th>Номинальное напряжение</th>
                                            <td> 110/220V  </td>
                                        </tr>
                                        <tr>
                                            <th>Внутренний диаметр подшипника, мм</th>
                                            <td> >15mm </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. наружный диаметр подшипника, мм</th>
                                            <td> 400 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. высота подшипника, мм</th>
                                            <td> 140 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. вес подшипника, кг</th>
                                            <td> 25 </td>
                                        </tr>
                                        <tr>
                                            <th>Габаритный размер, см</th>
                                            <td> 32x32x32 </td>
                                        </tr>
                                        <tr>
                                            <th>Масса комплекта, кг</th>
                                            <td> 29 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники в комплекте</th>
                                            <td> 10, 24, 40 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники по заказу</th>
                                            <td> нет </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 order-induct mb-5 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='Индукционный нагреватель IH-2.0'>Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Индукционный нагреватель IH-3.6</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="2" scope="col">Основные параметры</th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th>Мощность, КВт</th>
                                            <td> 3,6 </td>
                                        </tr>
                                        <tr>
                                            <th>Напряжение/Ток</th>
                                            <td> 220V/16A </td>
                                        </tr>
                                        <tr>
                                            <th>Частота</th>
                                            <td> 52/60Hz  </td>
                                        </tr>
                                        <tr>
                                            <th>Номинальное напряжение</th>
                                            <td> 110/220/380V  </td>
                                        </tr>
                                        <tr>
                                            <th>Внутренний диаметр подшипника, мм</th>
                                            <td> >30mm </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. наружный диаметр подшипника, мм</th>
                                            <td> 500 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. высота подшипника, мм</th>
                                            <td> 140 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. вес подшипника, кг</th>
                                            <td> 40 </td>
                                        </tr>
                                        <tr>
                                            <th>Габаритный размер, см</th>
                                            <td> 32x32x32 </td>
                                        </tr>
                                        <tr>
                                            <th>Масса комплекта, кг</th>
                                            <td> 38 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники в комплекте</th>
                                            <td> 20, 30, 40, 60 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники по заказу</th>
                                            <td> нет </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 order-induct mb-5 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='Индукционный нагреватель IH-3.6'>Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Индукционный нагреватель IH-5.0</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="2" scope="col">Основные параметры</th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th>Мощность, КВт</th>
                                            <td> 5,0 </td>
                                        </tr>
                                        <tr>
                                            <th>Напряжение/Ток</th>
                                            <td> 380V/13A </td>
                                        </tr>
                                        <tr>
                                            <th>Частота</th>
                                            <td> 53/60Hz  </td>
                                        </tr>
                                        <tr>
                                            <th>Номинальное напряжение</th>
                                            <td> 110/220/380V  </td>
                                        </tr>
                                        <tr>
                                            <th>Внутренний диаметр подшипника, мм</th>
                                            <td> >30mm </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. наружный диаметр подшипника, мм</th>
                                            <td> 500 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. высота подшипника, мм</th>
                                            <td> 140 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. вес подшипника, кг</th>
                                            <td> 65 </td>
                                        </tr>
                                        <tr>
                                            <th>Габаритный размер, см</th>
                                            <td> 32x32x32 </td>
                                        </tr>
                                        <tr>
                                            <th>Масса комплекта, кг</th>
                                            <td> 41 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники в комплекте</th>
                                            <td> 20, 30, 40, 60 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники по заказу</th>
                                            <td> нет </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 order-induct mb-5 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='Индукционный нагреватель IH-5.0'>Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Индукционный нагреватель IH-8.0</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="2" scope="col">Основные параметры</th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th>Мощность, КВт</th>
                                            <td> 8,0 </td>
                                        </tr>
                                        <tr>
                                            <th>Напряжение/Ток</th>
                                            <td> 380V/22A </td>
                                        </tr>
                                        <tr>
                                            <th>Частота</th>
                                            <td> 54/60Hz  </td>
                                        </tr>
                                        <tr>
                                            <th>Номинальное напряжение</th>
                                            <td> 220/380V  </td>
                                        </tr>
                                        <tr>
                                            <th>Внутренний диаметр подшипника, мм</th>
                                            <td> >30mm </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. наружный диаметр подшипника, мм</th>
                                            <td> 800 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. высота подшипника, мм</th>
                                            <td> 210 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. вес подшипника, кг</th>
                                            <td> 125 </td>
                                        </tr>
                                        <tr>
                                            <th>Габаритный размер, см</th>
                                            <td> 40x32x40 </td>
                                        </tr>
                                        <tr>
                                            <th>Масса комплекта, кг</th>
                                            <td> 71 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники в комплекте</th>
                                            <td> 20, 40, 60, 70 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники по заказу</th>
                                            <td> нет </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 order-induct mb-5 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='Индукционный нагреватель IH-8.0'>Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Индукционный нагреватель IH-14</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="2" scope="col">Основные параметры</th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th>Мощность, КВт</th>
                                            <td> 14,0 </td>
                                        </tr>
                                        <tr>
                                            <th>Напряжение/Ток</th>
                                            <td> 380V/37A </td>
                                        </tr>
                                        <tr>
                                            <th>Частота</th>
                                            <td> 55/60Hz  </td>
                                        </tr>
                                        <tr>
                                            <th>Номинальное напряжение</th>
                                            <td> 220/380V </td>
                                        </tr>
                                        <tr>
                                            <th>Внутренний диаметр подшипника, мм</th>
                                            <td> >60mm </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. наружный диаметр подшипника, мм</th>
                                            <td> 1100 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. высота подшипника, мм</th>
                                            <td> 280 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. вес подшипника, кг</th>
                                            <td> 550 </td>
                                        </tr>
                                        <tr>
                                            <th>Габаритный размер, см</th>
                                            <td> 120x50x96 </td>
                                        </tr>
                                        <tr>
                                            <th>Масса комплекта, кг</th>
                                            <td> 188 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники в комплекте</th>
                                            <td> 80 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники по заказу</th>
                                            <td> 40, 50, 60 </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 order-induct mb-5 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='Индукционный нагреватель IH-14'>Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Индукционный нагреватель IH-24</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="2" scope="col">Основные параметры</th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th>Мощность, КВт</th>
                                            <td> 24,0 </td>
                                        </tr>
                                        <tr>
                                            <th>Напряжение/Ток</th>
                                            <td> 380V/63A </td>
                                        </tr>
                                        <tr>
                                            <th>Частота</th>
                                            <td> 56/60Hz  </td>
                                        </tr>
                                        <tr>
                                            <th>Номинальное напряжение</th>
                                            <td> 220/380V </td>
                                        </tr>
                                        <tr>
                                            <th>Внутренний диаметр подшипника, мм</th>
                                            <td> >85mm </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. наружный диаметр подшипника, мм</th>
                                            <td> 1100 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. высота подшипника, мм</th>
                                            <td> 350 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. вес подшипника, кг</th>
                                            <td> 700 </td>
                                        </tr>
                                        <tr>
                                            <th>Габаритный размер, см</th>
                                            <td> 134x50x103 </td>
                                        </tr>
                                        <tr>
                                            <th>Масса комплекта, кг</th>
                                            <td> 260 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники в комплекте</th>
                                            <td> 100 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники по заказу</th>
                                            <td> 60, 80 </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 order-induct mb-5 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='Индукционный нагреватель IH-24'>Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Индукционный нагреватель IH-40</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="2" scope="col">Основные параметры</th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th>Мощность, КВт</th>
                                            <td> 40,0 </td>
                                        </tr>
                                        <tr>
                                            <th>Напряжение/Ток</th>
                                            <td> 380V/105A </td>
                                        </tr>
                                        <tr>
                                            <th>Частота</th>
                                            <td> 57/60Hz  </td>
                                        </tr>
                                        <tr>
                                            <th>Номинальное напряжение</th>
                                            <td> 220/380V  </td>
                                        </tr>
                                        <tr>
                                            <th>Внутренний диаметр подшипника, мм</th>
                                            <td> >120mm </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. наружный диаметр подшипника, мм</th>
                                            <td> 1400 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. высота подшипника, мм</th>
                                            <td> 420 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. вес подшипника, кг</th>
                                            <td> 950 </td>
                                        </tr>
                                        <tr>
                                            <th>Габаритный размер, см</th>
                                            <td> 150x60x147 </td>
                                        </tr>
                                        <tr>
                                            <th>Масса комплекта, кг</th>
                                            <td> 680 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники в комплекте</th>
                                            <td> 120 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники по заказу</th>
                                            <td> 80, 100 </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 order-induct mb-5 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='Индукционный нагреватель IH-40'>Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <img style="height: 100%; width: 100%; display: block;" src="{{asset('')}}" data-holder-rendered="true"  alt="...">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Индукционный нагреватель IH-100</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="2" scope="col">Основные параметры</th>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <th>Мощность, КВт</th>
                                            <td> 100,0 </td>
                                        </tr>
                                        <tr>
                                            <th>Напряжение/Ток</th>
                                            <td> 380V/263A </td>
                                        </tr>
                                        <tr>
                                            <th>Частота</th>
                                            <td> 58/60Hz  </td>
                                        </tr>
                                        <tr>
                                            <th>Номинальное напряжение</th>
                                            <td> 220/380V  </td>
                                        </tr>
                                        <tr>
                                            <th>Внутренний диаметр подшипника, мм</th>
                                            <td> >145mm </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. наружный диаметр подшипника, мм</th>
                                            <td> 2500 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. высота подшипника, мм</th>
                                            <td> 700 </td>
                                        </tr>
                                        <tr>
                                            <th>Макс. вес подшипника, кг</th>
                                            <td> По желанию заказчика </td>
                                        </tr>
                                        <tr>
                                            <th>Габаритный размер, см</th>
                                            <td> 230x100x100 </td>
                                        </tr>
                                        <tr>
                                            <th>Масса комплекта, кг</th>
                                            <td> 2500 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники в комплекте</th>
                                            <td> 200 </td>
                                        </tr>
                                        <tr>
                                            <th>Сердечники по заказу</th>
                                            <td> 100, 150 </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 order-induct mb-5 mt-3">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn-lg btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever='Индукционный нагреватель IH-100'>Заказать</button>
                            </div>
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
    {{url('induct/send')}}
@endsection
