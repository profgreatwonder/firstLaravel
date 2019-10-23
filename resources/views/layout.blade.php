<!DOCTYPE html>
<html lang=" {{ str_replace('_', '-', app()->getLocale())}} ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Learning Laravel 5.8')</title>
    {{-- <link rel="stylesheet" href="CSSS/bootstrap.min.css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>

<div class="container">
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03"> --}}


                {{-- </div> --}}
              {{-- </nav> --}}

              {{-- @include('nav', ['username' => 'cool_user_123'])

              The code above attaches username to navbar--}}

    @include('nav')

    @if(session()->has('message'))

    <div class="alert alert-success" role="alert">
        <strong>Success</strong> {{ session()->get('message') }}
       </div>

    @endif

    @yield('content')
</div>





<script src="JSV/jquery-3.4.1.min.js"></script>
<script src="JSV/bootstrap.min.js"></script>
<script src="JSV/popper.min.js"></script>
</body>
</html>
