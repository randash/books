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
                                            الطلبات النشطة
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                            النشاطات المنتهية
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

                                    <div class="iq-card-body">
                                        <div class="iq-card">
                                            <div class="iq-card-header d-flex justify-content-between">

                                            </div>
                                            <div class="iq-card-body">

                                                <div class="list-group">

                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h5 class="mb-1">List group item heading</h5>
                                                            <small class="text-muted">3 days ago</small>
                                                        </div>
                                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h5 class="mb-1">List group item heading</h5>
                                                            <small class="text-muted">3 days ago</small>
                                                        </div>
                                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                <div class="iq-card-body">
                                    <div class="iq-card">
                                        <div class="iq-card-header d-flex justify-content-between">

                                        </div>
                                        <div class="iq-card-body">

                                            <div class="list-group">

                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
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
