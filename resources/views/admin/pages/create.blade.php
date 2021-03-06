@extends('admin.app')

@section('breadcrumb')
إنشاء صفحة جديدة    
@endsection

@section('content')
  <div class="container-fluid">
    <div class="card mb-3">
      @include('alerts.success')
      <div class="card-header">
        <i class="fa fa-table"></i>
      </div>
      <div class="card-body">
        <div class="container">
          <form action="{{ route('pages.store') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="col-lg-5 form-group">
              <label for="slug">عنوان الصفحة</label>
              <input type="text" name="slug" id="" class="form-control" placeholder="About: مثال">
            </div>
            <div class="col-lg-5 form-group">
              <label for="title">الوصف</label>
              <input type="text" name="title" id="" class="form-control" placeholder="مثال: نبذة عنا">
            </div>
            <div class="col-lg-12 form-group">
              <label for="body">المحتوى</label>
              <textarea name="content" class="form-control summernote" cols="30" rows="10" id="summernote"></textarea>
            </div>
            <div class="col-lg-12 form-group">
              <button class="btn btn-primary mt-3" type="submit">إنشاء</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<script>
  $(document).ready(function() {
    $('#summernote').summernote();
  });
</script>
@endsection