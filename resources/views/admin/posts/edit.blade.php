@extends('admin.app')

@section('content')
  <div class="col-md-8 bg-white">
    <h2 class="my-4">اضف موضوع جديد</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
      <div class="form-group">
        <select name="category_id" id="" class="form-control">
          @include('lists.categories')
        </select>
      </div>
      <div class="form-group">
        <input type="text" name="title" placeholder="حدد عنوان الموضوع" class="form-control" value="{{ $post->title }}">
      </div>      
      <div class="form-group">
        <textarea  name="body" placeholder="محتوى الموضوع" rows="3" class="form-control">{{ $post->body }}</textarea>
      </div>
      <div class="form-group">
        <label for="slug">الاسم اللطيف</label>
        <input type="text" name="slug"  value="{{ $post->slug }}" class="form-control">
      </div>
      <div class="form-group">
        <label for="approved" class="ml-2">السماح</label>
        <input type="checkbox" name="approved"  value="{{ $post->approved }}"  {{ $post->approved ? 'checked' : ''}}>
      </div>
     
      <div class="form-group">
        <label for="details">اختر صورة تتعلق بالموضوع</label>
        <img src="{{$post->image_path}}" class="form-control w-25 h-25" alt="">
        <input type="file" name="image"   value="{{ $post->image_path }}" class="form-control">
      </div>      
      <button type="submit" class="btn btn-primary">ارسل</button>
    </form>
  </div>    
@endsection