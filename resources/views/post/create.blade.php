@extends('layouts.app')
@section('content')
  <div class="col-md-8 bg-white">
    <h2 class="my-4">اضف موضوع جديد</h2>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <select name="category_id" id="" class="form-control">
          @include('lists.categories')
        </select>
      </div>
      <div class="form-group">
        <input type="text" name="title" placeholder="حدد عنوان الموضوع" class="form-control">
      </div>      
      <div class="form-group">
        <textarea  name="body" placeholder="محتوى الموضوع" rows="3" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">ارسل</button>
    </form>
  </div>    
@endsection