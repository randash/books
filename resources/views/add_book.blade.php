
@extends('layouts.master')

@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">أضـف كتـاب</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form method="post" enctype="multipart/form-data" action="{{ url('/add_books')}}">
                                @csrf
                                <input type="hidden" value="{{Auth::user()->id}}" name="id">
                                <div class="form-group">
                                    <label> اسم الكتاب<span style="color: red;">*</span></label>
                                    <input  @if(isset($book))
                                            value="{{$book->name}}"
                                            @endif name="name" @error('name') is-invalid @enderror type="text" class="form-control">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>تصنيف الكتاب<span style="color: red;">*</span></label>
                                    <select name ="kind" @error('kind') is-invalid @enderror  class="form-control" id="exampleFormControlSelect1">
                                        <option  disabled="">تصنيف الكتاب</option>
                                        <option @if(isset($book))
                                               @if($book->kind =="تكنولوجيا المعلومات") selected @endif
                                                @endif  value="تكنولوجيا المعلومات">تكنولوجيا المعلومات</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="تاريخ") selected @endif
                                                @endif value="تاريخ">تاريخ</option>
                                        <option @if(isset($book))
                                                @if($book->kind=="فنون") selected @endif
                                                @endif  value="فنون">فنون</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="آداب") selected @endif
                                                @endif   value="آداب">آداب</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="اقتصاد و أعمال") selected @endif
                                                @endif   value="اقتصاد و أعمال">اقتصاد و أعمال</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="صحة و طب") selected @endif
                                                @endif   value="صحة و طب">صحة و طب</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="لغات") selected @endif
                                                @endif   value="لغات">لغات</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="دين") selected @endif
                                                @endif   value="دين">دين</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="علم نفس") selected @endif
                                                @endif   value="علم نفس">علم نفس</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="أحياء") selected @endif
                                                @endif   value="أحياء">أحياء</option>
                                        <option @if(isset($book))
                                                @if($book->kind =="اخرى") selected @endif
                                                @endif   value="اخرى">اخرى</option>
                                    </select>
                                    @error('kind')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>الغرض <span style="color: red;">*</span></label>
                                    <select name ="action" @error('action') is-invalid @enderror  class="form-control" id="exampleFormControlSelect1">
                                        <option @if(isset($book))
                                                @if($book->action =="بيع") selected @endif
                                                @endif  value="بيع">بيع</option>
                                        <option @if(isset($book))
                                                @if($book->action =="تبادل") selected @endif
                                                @endif  selected value="تبادل">تبادل</option>
                                        <option @if(isset($book))
                                                @if($book->action =="تبرع") selected @endif
                                                @endif  value="تبرع">تبرع</option>

                                    </select>
                                    @error('action')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>ارفق صورة<span style="color: #ff0000;">*</span></label>
                                    <div class="custom-file">

                                        <input id="file"  onchange="javascript:updateList()" name="photo" @error('photo') is-invalid @enderror
                                        type="file" class="custom-file-input" accept="image/png, image/jpeg">
                                        <label  id="fileList" class="custom-file-label"> @if(isset($book))
                                              {{$book->photo}}
                                            @else  اختر صورة @endif</label>

                                        @error('photo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>حالة الكتاب(جديد/مستعمل)<span style="color: red;">*</span></label>
                                        <select name="state" @error('state') is-invalid @enderror class="form-control" id="exampleFormControlSelect1">
                                            <option @if(isset($book))
                                                    @if($book->state =="جديد") selected @endif
                                                    @endif value="جديد" selected>جديد</option>
                                            <option @if(isset($book))
                                                    @if($book->state =="مستعمل") selected @endif
                                                    @endif value="مستعمل">مستعمل</option>
                                        </select>
                                    @error('state')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>سعر الكتاب(في حالة البيع)</label>
                                    <input @if(isset($book))
                                           value="{{$book->price}}"
                                           @endif name="price" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>اسم الكاتب</label>
                                    <input @if(isset($book))
                                           value="{{$book->author}}"
                                           @endif name="author" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>وصف الكتاب</label>
                                    <textarea  name="info" class="form-control" rows="4">@if(isset($book)){{$book->info}}@endif</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">إرسال</button>
                                <button type="reset" class="btn btn-danger">إعادة</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
        </div></div>

@endsection
<script>
    updateList = function() {

        var input = document.getElementById('file');
        var output = document.getElementById('fileList');

        output.textContent = input.files.item(0).name;

    }
</script>

