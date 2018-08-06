<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=device-width, shrink-to-fit=no">
    <meta name="description" content="Stido Design voor al uw grafische ontwerpen.">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <title>Stido.it | Home</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/master.css') }}" rel="stylesheet">
    <!-- <link href="{{ URL::asset('css/carousel.css') }}" rel="stylesheet"> -->


</head>

<body>

    @include('layouts.navigationTop')
    <!-- Show Content -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- /Show Content -->
    @include('layouts.footer')
