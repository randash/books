<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin-Login</title>

  <link href="{{ url('/') }}/img/logo.png" rel="icon">
  <link href="{{ url('/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="{{ url('/') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="{{ url('/') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ url('/') }}/css/style.css" rel="stylesheet">
  <link href="{{ url('/') }}/css/style-responsive.css" rel="stylesheet">

</head>
<body>

  <div id="login-page">
    <div class="container">
      <form method="POST" class="form-login" action="{{ url('/verifylogin')}}">
          @csrf
        <h2 class="form-login-heading">تسجيل الدخول</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="User ID" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Password">
          <label class="checkbox">
              <label style="float: left;margin-right: 25px;"> تذكرني</label>
            <input style="float: left;position: unset;" type="checkbox" value="remember-me">
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal">نسيت كلمة المرور؟</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> تسجيل دخول</button>
          <hr>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">نسيت كلمة المرور؟</h4>
              </div>
              <div class="modal-body">
                <p>أدخل بريدك الالكنروني لإرسال كلمة مرور جديدة</p>
                <input type="text" name="email" placeholder="البريد الالكتروني" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">إلغاء</button>
                <button class="btn btn-theme" type="button">أرسل</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ url('/') }}/lib/jquery/jquery.min.js"></script>
  <script src="{{ url('/') }}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ url('/') }}/lib/jquery.backstretch.min.js"></script>

</body>

</html>
