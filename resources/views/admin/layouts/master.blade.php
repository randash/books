<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>اختر كتابك</title>

    <!-- Favicons -->

    <link rel="icon" href="{{ url('/') }}/img/logo.png" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">


</head>

<body>
<section id="container">
    <!--header start-->
    <header class="header black-bg">

        <!--logo start-->

        <a href="/admin" class="logo pull-right"><b>اختر كتابك</b></a>

        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        </div>
        <div class="top-menu">
            <ul class="nav  top-menu">
                <li style="margin-left: -60px;"><a class="logout" href="login.html">تسجيل خروج</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
@include('admin.layouts.menu')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <section style="margin-right: 232px;margin-left: 10px;" id="main-content">
        <section class="wrapper">
            @yield('content')

        </section>
    </section>

    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
</section>
@include('admin.layouts.footer')
</body>

</html>
