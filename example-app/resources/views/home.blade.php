@extends('layouts.app')

@section('title-block')Главная@endsection

@section('hero')
    @parent
    <img class="d-block w-100" src="{{asset('img/factory.jpg')}}" alt="Factory">
@endsection

@section('content')
    <div class="album pt-4 my-md-5 pt-md-5 border-top border-success border-2">
        <div class="container">
            <div class="row">
                <section class="pb-5 text-center container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="">Производство и услуги</h1>
                            <p class="lead text-muted"> Перечень основных услуг компании "Южный Порт"</p>
                        </div>
                    </div>
                </section>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="mechenical work" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech1.jpg')}}" data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="/mechanicalres"><h4 class="card-title">Механическая обработка</h4></a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech2.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="/heattreat"><h4 class="card-title">Термическая обработка</h4></a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="/engineeringsup"><h4 class="card-title">Инженерное сопровождение</h4></a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "container border-success border-top border-bottom border-2">
        <div class="row shortcut">
            <div class = "col-12 p-5">
                <h1>Компания Южный порт это:</h1>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Ad animi beatae commodi consequuntur culpa
                    dolor excepturi fuga laboriosam molestias nesciunt possimus quam,
                    quia sunt! Dolore incidunt libero quasi saepe voluptatum.Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Ad animi beatae commodi consequuntur culpa
                    dolor excepturi fuga laboriosam molestias nesciunt possimus quam,
                    quia sunt! Dolore incidunt libero quasi saepe voluptatum.Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Ad animi beatae commodi consequuntur culpa
                    dolor excepturi fuga laboriosam molestias nesciunt possimus quam,
                    quia sunt! Dolore incidunt libero quasi saepe voluptatum. </p>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <section class="pb-5 text-center container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="">Наша продукция:</h1>
                        <p class="lead text-muted">Список основной продукции компании "Южный Порт"</p>
                    </div>
                </div>
            </section>
            <div class="carousel" data-flickity='{ "wrapAround": true }'>
                <div class="carousel-cell">
                    <img src="{{asset('img/tech3.jpg')}}">
                    <a class="green" href="#"><h4>Подшипники</h4></a>
                </div>
                <div class="carousel-cell">
                    <img src="{{asset('img/tech1.jpg')}}">
                    <a class="green" href="#"><h4>РТИ</h4></a>
                </div>
                <div class="carousel-cell">
                    <img src="{{asset('img/tech3.jpg')}}">
                    <a class="green" href="#"><h4>Линейные опоры</h4></a>
                </div>
                <div class="carousel-cell">
                    <img src="{{asset('img/tech1.jpg')}}">
                    <a class="green" href="#"><h4>Индукционные нагреватели</h4></a>
                </div>
                <div class="carousel-cell">
                    <img src="{{asset('img/tech2.jpg')}}">
                    <a class="green" href="#"><h4>Съемные подшипники</h4></a>
                </div>
            </div>
        </div>
    </div>
    <div class = "container mt-5 py-5 border-success border-top border-2">
        <div class="row">
            <div class = "col-md-6 p-5">
                <h1>Наши партнёры:</h1>
                <div class="card-group">
                    <div class="card">
                        <img src="{{asset('img/logo_inverse.jpg')}}" class="card-img" alt="...">
                    </div>
                    <div class="card">
                        <img src="{{asset('img/logo2.jpg')}}"  class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="{{asset('img/logo2.jpg')}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img src="{{asset('img/logo.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="{{asset('img/logo.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="{{asset('img/logo2.jpg')}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img src="{{asset('img/logo_inverse.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="{{asset('img/logo2.jpg')}}"  class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="{{asset('img/logo.jpg')}}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
            <div class = "col-md-6 p-5 ">
                <h1>Спецпредложение:</h1>
                <p>Сейчас у нас действует акция на некоторые товары: </p>
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                    @foreach($data as $key)
                    <div class="col">
                        <div class="card">
                            <img height="100" src="{{asset('/storage/'.$key->img)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$key->name}}</h5>
                                <a href="{{route('special-data-one', $key->id)}}" class="btn btn-sm btn-success">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <p>Узнать больше вы можете здесь:<a href="/special"> Спецпредложение</a> </p>
            </div>
        </div>
    </div>
    <div class = "container mb-5 border-success border-top border-bottom border-2">
        <div class="row intro-color">
            <div class = "col-12 p-5">
                <p class="h4">Собираетесь сделать заказ? Напишите нам на почту, что бы мы могли связаться с вами. <a href="/order" class="btn btn-lg btn-success ml-5">Заказать</a></p>
            </div>
        </div>
    </div>
    <div class="album pt-4 my-md-5 pt-md-5">
        <div class="container">
            <div class="row">
                <section class="pb-5 text-center container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="">Наши проекты:</h1>
                        </div>
                    </div>
                </section>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="#"><h4 class="card-title">Что-то</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="#"><h4 class="card-title">Что-то</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="#"><h4 class="card-title">Что-то</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="#"><h4 class="card-title">Что-то</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="#"><h4 class="card-title">Что-то</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="#"><h4 class="card-title">Что-то</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="#"><h4 class="card-title">Что-то</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset('img/tech3.jpg')}}"  data-holder-rendered="true">
                        <div class="card-body">
                            <a class="green" href="#"><h4 class="card-title">Что-то</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "container my-5">
        <div class="row">
            <div class = "col-5 p-5 mr-5 shortcut">
                <p class="h3"><strong>Наши преимущества:</strong></p>
                <p> <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                        <path d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                    </svg> Предлагаем только продукцию, качество которой проверено временем и подтверждено документально;</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                        <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                    </svg> Лояльная ценовая политика;</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                </svg> Достаточный ассортимент подшипников и РТИ на складе, полная комплектация заявок;</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg> Знание специфики товара;</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-caret-up-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M3.544 10.705A.5.5 0 0 0 4 11h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5a.5.5 0 0 0-.082.537z"/>
                    </svg> Удобное место расположения с подъездом для любого вида транспорта;</p>
            </div>
            <div class = "col-6 p-4 ml-5 shortcut h-50 border border-success border-3 rounded-pill">
                <a class="green" href="/contact"><p class="h4"><strong>Вы можете позвонить администратору или написать на почту</strong></p></a>
            </div>
        </div>
    </div>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
