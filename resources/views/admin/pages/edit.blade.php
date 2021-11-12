@extends('admin.app')

@section('breadcrumb')
تعديل الصفحة    
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
          <form action="{{ route('pages.update', $page->slug) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
            <div class="col-lg-5 form-group">
              <label for="slug">عنوان الصفحة</label>
              <input type="text" name="slug" id="" class="form-control" placeholder="About: مثال" value="{{ $page->slug }}">
            </div>
            <div class="col-lg-5 form-group">
              <label for="title">الوصف</label>
              <input type="text" name="title" id="" class="form-control" placeholder="مثال: نبذة عنا" value="{{ $page->title }}">
            </div>
            <div class="col-lg-12 form-group">
              <label for="body">المحتوى</label>
              <textarea name="content" class="form-control summernote" cols="30" rows="10" id="summernote">{!! $page->content !!}</textarea>
            </div>
            <div class="col-lg-12 form-group">
              <button class="btn btn-primary mt-3" type="submit">تعديل</button>
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