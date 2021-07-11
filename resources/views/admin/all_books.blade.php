@extends('admin.layouts.master')

@section('content')

            <!-- row -->
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4 style="padding-right: 15px;"> الكتب المعروضة حالياً</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> اسم الكتاب</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> التصنيف</th>
                                <th><i class="fa fa-bookmark"></i> حالة الكتاب</th>
                                <th><i class=" fa fa-edit"></i> صاحب الكتاب</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>
                                    <a href="basic_table.html#">{{$book->name}}</a>
                                </td>
                                <td class="hidden-phone">{{$book->kind}}</td>
                                <td>{{$book->state}}</td>
                                <td><span class="label label-info label-mini">Due</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
            </div>

        <!--
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Company</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                    <th><i class="fa fa-bookmark"></i> Profit</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="basic_table.html#">Company Ltd</a>
                    </td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    <td>12000.00$ </td>
                    <td><span class="label label-info label-mini">Due</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>

        </div>
 -->
@endsection
