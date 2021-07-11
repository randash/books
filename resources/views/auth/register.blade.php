@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="login.html">
                <img src="auth/img/logo.png" alt="" width="60px" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fal fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('register') }}">{{ __('انضم إلينا') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card-register">
     <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6  col-12">
                <div class="form-register">
                    <h1 class="mb-4">أنشئ حسابًا </h1>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                    <input id="name" type="text" placeholder="الاسم" class="form-control
                                      @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
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
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input name="uni" type="text" placeholder="الجامعة" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">

                                    <select name="city" class="form-control">
                                        <option selected disabled>السكن</option>
                                        <option>غزة</option>
                                        <option>رفح</option>
                                        <option>خان يونس</option>
                                        <option>بيت حانون</option>
                                        <option>جباليا</option>
                                        <option>دير البلح</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12">
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
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="password-confirm" placeholder="تأكيد كلمة المرور" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox mt-2 text-right">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">أوافق على شروط التالية
                                            وسياسة الإستخدام</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn mb-3">إشتراك</button>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="link-login">
                                        لدي حساب؟ <a href="login">تسجيل دخول</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>

            </div>
            <div class="col-lg-6  col-12 text-center d-lg-block d-none">
                <img src="auth/img/register.svg" alt="" width="80%">
            </div>
        </div>
    </div>
    </div>
@endsection
