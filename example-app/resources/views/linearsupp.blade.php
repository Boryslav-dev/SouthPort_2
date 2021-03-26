@extends('layouts.app')

@section('title-block')Линейные опоры@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Линейные опоры</p>
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
            <p><strong>Линейная опора качения</strong> роликовая предназначена для применения в направляющих качения металлорежущих станков, роботизированных комплексов, контрольно-измерительных приборов, лазерных и рентгено-сканирующих установках и пр.</p>
            <p>Опоры воспринимают высокие нагрузки, действующие перпендикулярно плоскости перемещения исполнительных органов, и позволяют перемещать их с неограниченной величиной хода.</p>
            <p>Рабочее положение опор не ограничивается (вертикальное, горизонтальное или наклонное в продольной плоскости).</p>
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="card mb-3">
                    <img style="height: 100%; width: 100%; display: block;" src="{{asset('img/l1.jpg')}}" data-holder-rendered="true"  alt="...">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="align-middle" scope="col">Модель</th>
                                    <th class="align-middle" scope="col">H</th>
                                    <th class="align-middle" scope="col">L</th>
                                    <th class="align-middle" scope="col">B</th>
                                    <th class="align-middle" scope="col">E</th>
                                    <th class="align-middle" scope="col">F</th>
                                    <th class="align-middle" scope="col">dxLw</th>
                                    <th class="align-middle" scope="col">K</th>
                                    <th class="align-middle" scope="col">K1</th>
                                    <th class="align-middle" scope="col">t</th>
                                    <th class="align-middle" scope="col">C (дин, кН)</th>
                                    <th class="align-middle" scope="col">Скорость (м/мин)</th>
                                    <th class="align-middle" scope="col">Заказать</th>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>RUS 19069</td>
                                    <td class="align-middle">19</td>
                                    <td class="align-middle">75</td>
                                    <td class="align-middle">27</td>
                                    <td class="align-middle">25.5</td>
                                    <td class="align-middle">20.6</td>
                                    <td class="align-middle">5х10</td>
                                    <td class="align-middle">М4</td>
                                    <td class="align-middle">3,3</td>
                                    <td class="align-middle">-</td>
                                    <td class="align-middle">42</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUS 19069">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUS 19105</td>
                                    <td class="align-middle">19</td>
                                    <td class="align-middle">111</td>
                                    <td class="align-middle">27</td>
                                    <td class="align-middle">50</td>
                                    <td class="align-middle">20.6</td>
                                    <td class="align-middle">5х10</td>
                                    <td class="align-middle">М4</td>
                                    <td class="align-middle">3,3</td>
                                    <td class="align-middle">6</td>
                                    <td class="align-middle">68</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUS 19105">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUSZ 12044</td>
                                    <td class="align-middle">19.05</td>
                                    <td class="align-middle">75</td>
                                    <td class="align-middle">25.4</td>
                                    <td class="align-middle">25.5</td>
                                    <td class="align-middle">20.6</td>
                                    <td class="align-middle">5х10</td>
                                    <td class="align-middle">-</td>
                                    <td class="align-middle">3,3</td>
                                    <td class="align-middle">-</td>
                                    <td class="align-middle">42</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUSZ 12044">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUS 26086</td>
                                    <td class="align-middle">26</td>
                                    <td class="align-middle">92</td>
                                    <td class="align-middle">40</td>
                                    <td class="align-middle">28</td>
                                    <td class="align-middle">30</td>
                                    <td class="align-middle">7х14</td>
                                    <td class="align-middle">M6</td>
                                    <td class="align-middle">4,5</td>
                                    <td class="align-middle">10</td>
                                    <td class="align-middle">76</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUSZ 12044">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUS 26102</td>
                                    <td class="align-middle">26</td>
                                    <td class="align-middle">108</td>
                                    <td class="align-middle">40</td>
                                    <td class="align-middle">44</td>
                                    <td class="align-middle">30</td>
                                    <td class="align-middle">7х14</td>
                                    <td class="align-middle">M6</td>
                                    <td class="align-middle">4,5</td>
                                    <td class="align-middle">10</td>
                                    <td class="align-middle">95</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUS 26102">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUS 26126</td>
                                    <td class="align-middle">26</td>
                                    <td class="align-middle">132</td>
                                    <td class="align-middle">40</td>
                                    <td class="align-middle">68</td>
                                    <td class="align-middle">30</td>
                                    <td class="align-middle">7х14</td>
                                    <td class="align-middle">M6</td>
                                    <td class="align-middle">4,5</td>
                                    <td class="align-middle">10</td>
                                    <td class="align-middle">122</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUS 26126">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUSZ 18059</td>
                                    <td class="align-middle">28.57</td>
                                    <td class="align-middle">100</td>
                                    <td class="align-middle">38.1</td>
                                    <td class="align-middle">38</td>
                                    <td class="align-middle">31</td>
                                    <td class="align-middle">7х14</td>
                                    <td class="align-middle">-</td>
                                    <td class="align-middle">4,5</td>
                                    <td class="align-middle">-</td>
                                    <td class="align-middle">86</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUSZ 18059">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUS 38134</td>
                                    <td class="align-middle">38</td>
                                    <td class="align-middle">133</td>
                                    <td class="align-middle">52</td>
                                    <td class="align-middle">51</td>
                                    <td class="align-middle">41</td>
                                    <td class="align-middle">10х20</td>
                                    <td class="align-middle">M8</td>
                                    <td class="align-middle">6,7</td>
                                    <td class="align-middle">14</td>
                                    <td class="align-middle">179</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUS 38134">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUS 38206</td>
                                    <td class="align-middle">38</td>
                                    <td class="align-middle">206</td>
                                    <td class="align-middle">52</td>
                                    <td class="align-middle">102</td>
                                    <td class="align-middle">41</td>
                                    <td class="align-middle">10х20</td>
                                    <td class="align-middle">M8</td>
                                    <td class="align-middle">6,7</td>
                                    <td class="align-middle">14</td>
                                    <td class="align-middle">305</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUS 38206">Заказать</button></td>
                                </tr>
                                <tr>
                                    <td>RUSZ 24084</td>
                                    <td class="align-middle">38.1</td>
                                    <td class="align-middle">133</td>
                                    <td class="align-middle">50.8</td>
                                    <td class="align-middle">51</td>
                                    <td class="align-middle">41</td>
                                    <td class="align-middle">10х20</td>
                                    <td class="align-middle">-</td>
                                    <td class="align-middle">5,2</td>
                                    <td class="align-middle">-</td>
                                    <td class="align-middle">179</td>
                                    <td class="align-middle">25</td>
                                    <td><button type="button" class="btn-sm btn-success green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="RUSZ 24084">Заказать</button></td>
                                </tr>
                                </tbody>
                            </table>
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
        <a href="/heattreat" class="nav-link border-bottom border-success pl-0 green">РТИ</a>
        <a href="/linearsupp" class="nav-link border-bottom border-success pl-0 green">Линейные опоры</a>
        <a href="/linearsupp" class="nav-link border-bottom border-success pl-0 green">Индукционные нагреватели</a>
        <a href="/pullers" class="nav-link pl-0 green">Съёмники</a>
    </div>
@endsection

@section('model')
    @parent
    {{url('linearsupp/send')}}
@endsection
