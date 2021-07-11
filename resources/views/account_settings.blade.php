
@extends('layouts.master')

@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                            <ul class="iq-edit-profile d-flex nav nav-pills">
                                <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                       المعلومات الشخصية
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                        تغيير كلمة المرور
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">المعلومات الشخصية</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form method="post" enctype="multipart/form-data" action="/account_settings/edit">
                                        @csrf
                                        <input name="id" hidden value="{{Auth::user()->id}}"/>
                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                    <img class="profile-pic" src="{{ url('/') }}/upload/images/{{Auth::user()->photo}}" alt="profile-pic">
                                                    <div class="p-image">
                                                        <i class="ri-pencil-line upload-button"></i>
                                                        <input id="file" name="photo" type="file" class="file-upload" accept="image/png, image/jpeg">
{{--                                                        <input name="photo" class="file-upload" type="file" accept="image/*"/>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row align-items-center">
                                            <div class="form-group col-sm-6">
                                                <label for="fname">اسم المستخدم</label>
                                                <input name="name"  type="text" class="form-control" id="fname" value="{{Auth::user()->name}}">
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="uname">البريد الالكتروني</label>
                                                <input disabled type="text" class="form-control" id="uname" value="{{Auth::user()->email}}">
                                            </div>
                                        </div>
                                            <div class=" row align-items-center">
                                                <div class="form-group col-sm-6">
                                                    <label for="uni">الجامعة</label>
                                                    <input name="uni"  type="text" placeholder="الجامعة/الكلية" class="form-control" id="uni" value="{{Auth::user()->university}}">
                                                </div>

                                                <div class="form-group col-sm-6">
                                                <label>منطقة السكن</label>
                                                <select name="city" class="form-control" id="exampleFormControlSelect4">
                                                    <option name="غزة"@if(Auth::user()->city=="غزة")
                                                       selected @endif >غزة</option>
                                                    <option @if(Auth::user()->city=="رفح")
                                                            selected @endif name="رفح">رفح</option>
                                                    <option @if(Auth::user()->city=="خان يونس")
                                                            selected @endif   name="خان يونس">خان يونس</option>
                                                    <option @if(Auth::user()->city=="بيت حانون")
                                                            selected @endif  name="بيت حانون">بيت حانون</option>
                                                    <option  @if(Auth::user()->city=="جباليا")
                                                             selected @endif   name="جباليا">جباليا</option>
                                                    <option @if(Auth::user()->city=="دير البلح")
                                                            selected @endif  name="دير البلح">دير البلح</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">تعديل</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">تغيير كلمة المرور</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form method="POST" enctype="multipart/form-data" action="/account_settings/password">
                                        @csrf
                                        <input name="id" hidden value="{{Auth::user()->id}}"/>
                                        <div class="form-group">
                                            <label for="cpass">كلمة المرور الحالية:</label>
                                            <a href="#" class="float-right">نسيت كلمة المرور</a>
                                            <input type="Password" name="oldPass" class="form-control" id="cpass" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">كلمة المرور الجديدة:</label>
                                            <input type="Password" name="newPass" class="form-control" id="npass" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="vpass">تأكيد كلمة المرور الجديدة:</label>
                                            <input type="Password" name="newPass2" class="form-control" id="vpass" value="">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">إرسال</button>
                                        <button type="reset" class="btn iq-bg-danger">إلغاء</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
