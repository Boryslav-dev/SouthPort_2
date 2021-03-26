<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/app.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<body>

    @include('includes.header')

    @if(Request::is('/') || Request::is('contact') || Request::is('order'))

    @include('includes.hero')

    <div class="container mt-5">
        <div class="row">
            <div class = "col-12">
                @yield('content')
            </div>
        </div>
    </div>

    @endif

    @if(!Request::is('/') && !Request::is('contact') && !Request::is('order') && !Request::is('login'))

    @include('includes.hero')

    <div class="container mt-5">
        <div class="row">
            <div class = "col-12 col-sm-9 content">
                @yield('content')
            </div>
            <div class="col-0 col-sm-3">
                @include('includes.aside')
            </div>
        </div>
        @include('includes.model')
    </div>

    @endif

    @if(Request::is('login'))
        <div class="container mt-5">
            <div class="row">
                <div class = "col-4 col-sm-4 content">

                </div>
                <div class = "col-3 col-sm-3 content">
                 @yield('content')
                </div>
            </div>
        </div>
    @endif

    @include('includes.footer')

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../../js/app.js"></script>
    <script src="../../js/model.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>
