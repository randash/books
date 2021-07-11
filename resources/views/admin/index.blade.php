@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 main-chart">
           <p>عدد مستخدمين الموقع الحالي <span class="badge bg-warning">{{$users}}</span>
           </p>
            <p>عدد حسابات المستخدمين المعطلة <span class="badge bg-important">{{$disusers}}</span>
            </p>
            <p>عدد الكتب المعروضة <span class="badge bg-info">{{$books}}</span></p>
            <p>عدد الكتب المباعة  <span class="badge bg-inverse">{{$soldbooks}}</span>
            </p>
        </div>
    </div>
@endsection



