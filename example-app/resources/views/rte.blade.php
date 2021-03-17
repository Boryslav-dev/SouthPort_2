@extends('layouts.app')

@section('title-block')Резино-технические изделия@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Резино-технические изделия</p>
    </div>
@endsection

@section('content')

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
