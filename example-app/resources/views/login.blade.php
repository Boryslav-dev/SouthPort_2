@extends('layouts.app')

@section('title-block')Вход@endsection

@section('content')

    <main class="form-signin text-center">
        <form action="{{url('login/submit')}}" method="post">
            {{ csrf_field() }}
            <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите как администратор</h1>
            <label for="inputEmail" class="visually-hidden">Логин</label>
            <input type="login" name="login" id="inputEmail" class="form-control" placeholder="Логин" required="" autofocus="">
            <label for="inputPassword" class="visually-hidden">Пароль</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
            <button class=" btn btn btn-primary my-5" type="submit">Войти</button>
        </form>
    </main>

@endsection
