@extends('layouts.master')

@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">تصفح الكتب المعروضة</h4>
                            </div>
{{--                            <div class="iq-card-header-toolbar d-flex align-items-center">--}}
{{--                                <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>--}}
{{--                            </div>--}}
                        </div>
                        @if($allBooks->get(0)!=null)
                        <div class="iq-card-body">
                            <div class="row">
                                @foreach($allBooks as $book)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div style="width: 220px;height: 50px">
                                                <a href="#" style="padding:12px 0px;vertical-align: sub;">{{$book->user_name}}</a>
                                                <a href="#"><img style="width: 50px;float: right;" src="{{ url('/') }}/upload/images/{{$book->user_photo}}" alt=""></a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="#"><img style="width: 150px;height: 200px;}" class="img-fluid rounded w-100" src="{{ url('/') }}/upload/images/{{$book->photo}}" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="{{ url('show_book/' . $book->id  ) }}" class="btn btn-sm btn-white">عرض الكتاب</a>
                                                    </div>
                                                </div>
                                                <div style="text-align: center;" class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">{{$book->name}}</h6>
{{--                                                        <p class="font-size-13 line-height mb-1">{{$book->author}}</p>--}}
                                                        <p class="font-size-13 line-height mb-1">{{$book->kind}}</p>
                                                        <p class="font-size-13 line-height mb-1">{{$book->state}}</p>
                                                        @if($book->price)
                                                        <p class="font-size-13 line-height mb-1">{{$book->price}}₪</p>
                                                        @elseif($book->action)
                                                            <p class="font-size-13 line-height mb-1">{{$book->action}}</p>
                                                        @endif
                                                    </div>





                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @else
                            <div>لا يوجد كتب للعرض</div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
