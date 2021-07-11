<!doctype html>
<html lang="en" dir="rtl" style="overflow-x: hidden">

<!-- Mirrored from iqonic.design/themes/booksto/html-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 20:34:15 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Booksto - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/tst/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/tst/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/tst/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/tst/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/tst/css/responsive.css">
    <link rel="stylesheet" href="{{ url('/') }}/mstyle.css">
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

    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-menu-bt d-flex align-items-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="/" class="header-logo">
                            <img src="{{ url('/') }}/tst/images/logo.png" class="img-fluid rounded-normal" alt="">
                            <div class="logo-title">
                                <span class="text-primary text-uppercase">Booksto</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navbar-breadcrumb">
                    <h5 class="mb-0">Shop</h5>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                        </ul>
                    </nav>
                </div>
                <div class="iq-search-bar">
                    <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Search Here...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                <i class="ri-search-line"></i>
                            </a>
                            <form action="#" class="search-box p-0">
                                <input type="text" class="text search-input" placeholder="Type here to search...">
                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            </form>
                        </li>
                        <li class="nav-item nav-icon">
                            <a style="width: 80px;font-size: 15px" class="text-gray" href="add_book">Add Book
                            </a>
                        </li>
                        <li class="nav-item nav-icon">
                            <a href="massages" class="search-toggle iq-waves-effect text-gray rounded">
                                <i href="massages" class="ri-mail-line"></i>
                                <span class="bg-primary dots"></span>
                            </a>

                        </li>

                        <li class="line-height pt-3">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <img src="{{ url('/') }}/tst/images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                                <div class="caption">
                                    <h6 class="mb-1 line-height">Barry Tech</h6>
                                </div>
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                            <span class="text-white font-size-12">Available</span>
                                        </div>
                                        <a href="profile" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-file-user-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">My Profile</h6>
                                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="account_settings" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-account-box-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Account settings</h6>
                                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <h3 class=" text-center">Messaging</h3>
                        <div class="messaging">
                            <div class="inbox_msg">
                                <div class="inbox_people">
                                    <div class="headind_srch">
                                        <div class="recent_heading">
                                            <h4>Recent</h4>
                                        </div>
                                        <div class="srch_bar">
                                            <div class="stylish-input-group">
                                                <input type="text" class="search-bar"  placeholder="Search" >
                                                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
                                        </div>
                                    </div>
                                    <div class="inbox_chat">
                                        <div class="chat_list active_chat">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat_list">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat_list">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="mesgs">
                                    <div class="msg_history">
                                        <div class="incoming_msg">
                                            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="received_msg">
                                                <div class="received_withd_msg">
                                                    <p>Test which is a new approach to have all
                                                        solutions</p>
                                                    <span class="time_date"> 11:01 AM    |    June 9</span></div>
                                            </div>
                                        </div>
                                        <div class="outgoing_msg">
                                            <div class="sent_msg">
                                                <p>Test which is a new approach to have all
                                                    solutions</p>
                                                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                                        </div>
                                        <div class="incoming_msg">
                                            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="received_msg">
                                                <div class="received_withd_msg">
                                                    <p>Test, which is a new approach to have</p>
                                                    <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                                            </div>
                                        </div>
                                        <div class="outgoing_msg">
                                            <div class="sent_msg">
                                                <p>Apollo University, Delhi, India Test</p>
                                                <span class="time_date"> 11:01 AM    |    Today</span> </div>
                                        </div>
                                        <div class="incoming_msg">
                                            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="received_msg">
                                                <div class="received_withd_msg">
                                                    <p>We work directly with our designers and suppliers,
                                                        and sell direct to you, which means quality, exclusive
                                                        products, at a price anyone can afford.</p>
                                                    <span class="time_date"> 11:01 AM    |    Today</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="type_msg">
                                        <div class="input_msg_write">
                                            <input type="text" class="write_msg" placeholder="Type a message" />
                                            <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
    <script src="{{ url('/') }}/tst/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/tst/js/popper.min.js"></script>
    <script src="{{ url('/') }}/tst/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="{{ url('/') }}/tst/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ url('/') }}/tst/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ url('/') }}/tst/js/waypoints.min.js"></script>
    <script src="{{ url('/') }}/tst/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="{{ url('/') }}/tst/js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ url('/') }}/tst/js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="{{ url('/') }}/tst/js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ url('/') }}/tst/js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ url('/') }}/tst/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ url('/') }}/tst/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ url('/') }}/tst/js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->
    <script src="{{ url('/') }}/tst/js/lottie.js"></script>
    <!-- am core JavaScript -->
    <script src="{{ url('/') }}/tst/js/core.js"></script>
    <!-- am charts JavaScript -->
    <script src="{{ url('/') }}/tst/js/charts.js"></script>
    <!-- am animated JavaScript -->
    <script src="{{ url('/') }}/tst/js/animated.js"></script>
    <!-- am kelly JavaScript -->
    <script src="{{ url('/') }}/tst/js/kelly.js"></script>
    <!-- am maps JavaScript -->
    <script src="{{ url('/') }}/tst/js/maps.js"></script>
    <!-- am worldLow JavaScript -->
    <script src="{{ url('/') }}/tst/js/worldLow.js"></script>
    <!-- Raphael-min JavaScript -->
    <script src="{{ url('/') }}/tst/js/raphael-min.js"></script>
    <!-- Morris JavaScript -->
    <script src="{{ url('/') }}/tst/js/morris.js"></script>
    <!-- Morris min JavaScript -->
    <script src="{{ url('/') }}/tst/js/morris.min.js"></script>
    <!-- Flatpicker Js -->
    <script src="{{ url('/') }}/tst/js/flatpickr.js"></script>
    <!-- Style Customizer -->
    <script src="{{ url('/') }}/tst/js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ url('/') }}/tst/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="{{ url('/') }}/tst/js/custom.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.4.js"></script>
<script src="//kenwheeler.github.io/slick/slick/slick.js"></script>
