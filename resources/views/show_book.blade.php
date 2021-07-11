
@extends('layouts.master')

@section('content')

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">وصف الكتاب</h4>
                        </div>
                        <div class="iq-card-body pb-0">
                            <div class="description-contens align-items-top row">
                                <div class="col-md-4">
                                    <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                        <div class="iq-card-body p-0">
                                            <div class="row align-items-center">

                                                <div style="margin: auto;" class="col-9">
                                                    <ul id="description-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                                        <li>

                                                            <img style="width:300px;height:400px" src="{{ url('/') }}/upload/images/{{$book->photo}}" class="img-fluid w-100 rounded" alt="">

                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                        <div class="iq-card-body p-0">
                                            <h3 class="mb-3">{{$book->name}}</h3>
                                            <div class="price d-flex align-items-center font-weight-500 mb-2">
                                                <span class="font-size-24 text-dark">{{$book->action}}</span>
                                            </div>
                                            <div class="price d-flex align-items-center font-weight-500 mb-2">
                                                <span class="font-size-24 text-dark">تصنيف:{{$book->kind}}</span>
                                            </div>
                                            <div class="price d-flex align-items-center font-weight-500 mb-2">
                                                <span class="font-size-24 text-dark">{{$book->price}}</span>
                                            </div>
                                            @if(isset($book->author))

                                                <div class="text-primary mb-4">اسم الكاتب: <span class="text-body">{{$book->author}}</span></div>
                                            @endif
                                            @if(isset($book->info))

                                            <div class="text-primary mb-4"> عن الكتاب: <span class="text-body">{{$book->info}}</span></div>
                                            @endif
                                            <div class="mb-4 d-flex align-items-center">

                                                <button style="background: var(--iq-primary);border-color: var(--iq-primary);font-size: 14px;border-radius: 4px;
                                                color: #fff;" type="button" lass="btn btn-primary view-more mr-2" data-toggle="modal" data-target="#exampleModal">
                                                    تواصل مع صاحب الكتاب
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
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
