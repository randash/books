<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div style="display: inline !important;" class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
                <div  class="iq-navbar-logo d-flex justify-content-between">
                    <a href="/" class="header-logo">
                        <img style="width: 70px;
    height: 80px;
}" src="{{ url('/') }}/img/logo.png" class="img-fluid rounded-normal" alt="">

                    </a>
                </div>
            </div>
            <div style="margin-right: -110px;
    margin-top: 23px;" class="navbar-breadcrumb">

                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">اختـر كتـابك</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="/">الصفحة الرئيسية</a></li>
                    </ul>
                </nav>
            </div>
            <div style="margin-top: 10px;" class="iq-search-bar">
                <form action="{{ url('/search')}}" method="GET" class="searchbox">
                    @csrf
                    <input type="text" name="search" class="text search-input" placeholder="ابحث هنا...">
                    <button style=" border: none;background: transparent;" class="search-link" type="submit" name="button"><i class="ri-search-line"></i></button>
{{--                    <a class="search-link" ><i class="ri-search-line"></i></a>--}}
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


                    <li class="line-height pt-3">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else

                                <li class="nav-item nav-icon">
                                    <a style="width: 80px;font-size: 15px" class="text-gray" href={{ url('add_book/')}} >إضافة كتاب
                                    </a>
                                </li>
                                <li class="nav-item nav-icon">
                                    <a href="massages" class="search-toggle iq-waves-effect text-gray rounded">
                                        <i class="ri-mail-line"></i>
                                        <span class="bg-primary dots"></span>
                                    </a>

                                </li>

{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                        {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                    </a>--}}

{{--                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                            {{ __('Logout') }}--}}
{{--                                        </a>--}}

{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                            <?php
                               $i= Auth::user()->photo;
                            ?>
                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                    <img src="{{ url('/') }}/upload/images/{{$i}}" class="img-fluid rounded-circle mr-3" style="width: 80px;" alt="user">

                                    <div class="caption">
                                        <h6 style="margin-left: 20px;" class="mb-1 line-height">{{ Auth::user()->name }}</h6>
                                    </div>
                                </a>
                                <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <span class="text-white font-size-12">متوفر</span>
                                            </div>
                                            <a href="{{ url('profile/' . Auth::user()->id ) }}" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-file-user-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">حسابي الشخصي</h6>
                                                        <p class="mb-0 font-size-12"></p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="/account_settings" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-account-box-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">إعدادات الحساب</h6>
                                                        <p class="mb-0 font-size-12"></p>
                                                    </div>
                                                </div>
                                            </a>

                                            <div class="d-inline-block w-100 text-center p-3">

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('تسجيـل خـروج') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endguest
                        </ul>

                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
