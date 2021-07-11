

@extends('layouts.master')

@section('content')

<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row profile-content">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="iq-card">
                    <div class="iq-card-body profile-page">
                        <div class="profile-header">
                            <div class="cover-container text-center">
                                <img src="{{ url('/') }}/upload/images/{{$user_data->photo}}" alt="profile-bg" class="rounded-circle img-fluid">
                                <div class="profile-detail mt-3">
                                    <h3>{{$user_data->name}}</h3>
                                    @if(Auth::user()->id ==$user_data->id )
                                   <a style="color: black;" href="/account_settings"><i class="ri-pencil-line">تعديل المعلومات الشخصية</i></a>
                                    @endif
                                    <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                    </div>
                                </div>
                                <ul class="list-inline p-0 mb-0">
                                    <li>
                                    @if(isset($user_data->university))
                                        {{$user_data->university}}

                                        @endif</li>
                                    <li>
                                        @if(isset($user_data->city))
                                            {{$user_data->city}}

                                        @endif
                                    </li>
                                    <li>
                                         عضو منذ   {{$user_data->created_at->year}}-{{$user_data->created_at->month}}-{{$user_data->created_at->day}}
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-12 col-lg-8">

                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">الكتب </h4>
                        </div>

                    </div>

                    <div class="iq-card-body">
                        <div class="iq-card-body">
                            <div class="row">
                                @foreach ($user_books as $book)
                                <div class="col-sm-8 col-md-6 col-lg-4">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href=""><img style="width: 150px;height: 200px;}"  class="img-fluid rounded w-100" src="{{ url('/') }}/upload/images/{{$book->photo}}" alt="">
                                                    </a>
{{--                                                    <div class="view-book">--}}
{{--                                                        <a href="{{ url('show_book/' . $book->id  ) }}" class="btn btn-sm btn-white">تفاصيل</a>--}}
{{--                                                    </div>--}}
                                                    @if(Auth::user()->id ==$user_data->id )
                                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                                                <a class="dropdown-item"href="{{ url('show_book/' . $book->id  ) }}"><i class="ri-eye-fill mr-2"></i>عرض</a>
                                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>حذف</a>
                                                                <a class="dropdown-item" href={{ url('edit_book/'. $book->id )}}><i class="ri-pencil-fill mr-2"></i>تعديل</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                        <div class="view-book">
                                                        <a href="{{ url('show_book/' . $book->id  ) }}" class="btn btn-sm btn-white">تفاصيل</a>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">{{$book->name}}</h6>
                                                    </div>

                                                    @if($book->price)
                                                        <div class="price d-flex align-items-center">
                                                            <h6><b>{{$book->price}}₪</b></h6>
                                                        </div>
                                                    @elseif($book->action)
                                                        <div class="price d-flex align-items-center">
                                                            <h6><b>{{$book->action}}</b></h6>
                                                        </div>
                                                    @endif


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

