<!doctype html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
-->
    <link rel="stylesheet" href="auth/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notokufiarabic.css">
    <link rel="stylesheet" href="auth/css/bootstrap.min.css" />
    <link rel="stylesheet" href="auth/css/style.css" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
          -->
</head>
<body>





        @yield('content')


</body>
<script src="auth/js/jquery-3.6.0.min.js"></script>
<script src="auth/js/bootstrap.min.js"></script>
<script src="auth/js/main.js"></script>
</html>
