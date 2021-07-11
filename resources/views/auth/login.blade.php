@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="login">
                <img src="{{ url('/') }}/auth/img/logo.png" alt="" width="60px" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fal fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="login">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">انضم إلينا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card-login">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5  col-12">
                    <div class="form-login">
                        <h1 class="mb-4">تسجيل دخول</h1>
                        <p>قم بإدخال البريد الإلكتروني وكلمة السر التي قمت بإدخالها لعملية الدخول</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                         <div class="col-12">
                                    <div class="form-group">
                                        <input id="name" type="text" placeholder="البريد الالكتروني" class="form-control
                                      @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input id="password" type="password" placeholder="كلمة المرور" class="form-control
                                      @error('password') is-invalid @enderror" name="password"
                                               value="{{ old('password') }}" required autocomplete="password" autofocus>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 d-flex  justify-content-between">
                                    <div class="custom-control custom-checkbox text-right">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">تذكرني</label>
                                    </div>
                                    <div class="link-resetpassword">
                                        <a href="resetpassword1">نسيت كلمة المرور</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn  mb-3">دخول</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7  col-12 text-center d-lg-block d-none">
                    <img src="{{ url('/') }}/auth/img/login.svg" alt="" width="70%">
                </div>

            </div>
        </div>
    </div>
@endsection
<script src="{{ url('/') }}/auth/js/jquery-3.6.0.min.js"></script>
<script src="{{ url('/') }}/auth/js/bootstrap.min.js"></script>
<script src="{{ url('/') }}/auth/js/main.js"></script>
