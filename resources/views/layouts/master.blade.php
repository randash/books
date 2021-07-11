<!doctype html>
<html lang="en" dir="rtl" style="overflow-x: hidden">

<!-- Mirrored from iqonic.design/themes/booksto/html-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 20:34:15 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
{{--    <title>@yield('title')</title>--}}
    <title>اختر كتابك</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/img/logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/tst/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/tst/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/tst/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/tst/css/responsive.css">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->

    <!-- TOP Nav Bar -->
@include('layouts.header')
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    @yield('content')
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@include('layouts.footer')
</body>

<!-- Mirrored from iqonic.design/themes/booksto/html-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 20:35:50 GMT -->
</html>
