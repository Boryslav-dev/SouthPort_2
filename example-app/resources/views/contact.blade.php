@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Контакты</p>
    </div>
@endsection

@section('content')
    <div class="container mb-5">
        <div class="row mt-5">
            <div class = "col-3">
                <p><b>Время работы:</b></p>
                <p>Пн: 9:00 - 17:00</p>
                <p>Вт: 9:00 - 17:00</p>
                <p>Ср: 9:00 - 17:00</p>
                <p>Чт: 9:00 - 17:00</p>
                <p>Пт: 9:00 - 17:00</p>
                <p>Сб-Вс: выходной</p>
            </div>
            <div class = "col-3">

                <p><b>Обращайтесь по:</b></p>

                <p><a class="contact" href="tel:+38066405643"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>  +38066405643</a></p>

                <p><a class="contact" href="mailto:mnfduhii@ghmafil.com"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                </svg> mnfduhii@ghmafil.com</a></p>

                <p><a class="contact" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg> проспект Ландау 32/8</a></p>

            </div>
            <div class="col-md-6">
                <form action="{{url('contact/send')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="email" class="form-label">Ваша почта:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                        </div>
                        <div class="col-sm-6">
                            <label for="title" class="form-label">Тема сообщения:</label>
                            <input type="text" class="form-control" placeholder="" name="title">
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Сообщение:</label>
                            <textarea class="form-control" id="message"
                                      name="message" rows="4" cols="30">
                            </textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input class="btn btn-success" type="submit" value="Отправить">
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
        <div class="container mt-5 border-success border-top pt-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At distinctio fugit natus neque nesciunt nihil, nobis officiis tempore tenetur voluptate? Consectetur in nesciunt repudiandae. Assumenda blanditiis eligendi pariatur rem velit.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d641.7550402356462!2d36.301362508486946!3d49.95472430006083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x41270af7985d1b3d%3A0x1e3edda8fd5444a4!2z0L_RgNC-0YHQvy4g0JvRjNCy0LAg0JvQsNC90LTQsNGDLCAxNTEsINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!3m2!1d49.9549039!2d36.301116799999996!5e0!3m2!1sru!2sua!4v1615051582726!5m2!1sru!2sua" width="100%" height="450" style="border:0.1em;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection

