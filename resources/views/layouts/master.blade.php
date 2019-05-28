<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico"> <!-- <<<<<<<<<< -->

    <title>Webshop</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="header"><a href="/">
        <img class="headerimg" src="{{ asset('imgs/logo.png') }}">
    </a>
    @include('layouts.functionbar')
</div>

<div class="maincontainer">
    @include('layouts.navbar')

    @yield('content')
</div>
<div class="footer">
    <div class="footertext">
        Stijn Vissers & Michael Walraven © 2019
    </div>
</div>
</body>
</html>
