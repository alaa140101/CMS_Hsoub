@extends('layouts.app')

@section('content')
<div class="container text-muted">
  <div class="row bg-white p-3 mb-4">
    <div class="col-md-3 text-center">
      <img src="{{ $contents->profile->avatar }}" alt="avatar" class="profile mb-2">
    </div>

    <div class="col-md-9 text-md-right text-center">
      <h2>{{ $contents->name }}</h2>
      <p class="word-break">{{ $contents->profile->bio }}</p>
      <a href="#">{{ $contents->profile->website }}</a>
    </div>
  </div>

  <div class="row p-3">
    <div class="col-md-12">
      <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
          <a href="{{$contents->profile->user_id}}/comments" class="nav-link">التعليقات</a>
        </li>
        <li class="nav-item">
          <a href="{{$contents->profile->user_id}}" class="nav-link">المنشورات</a>
        </li>
      </ul>

      @if ($contents->relationLoaded('posts'))
      @includeWhen(!count($contents->posts), 'alerts.empty', ['msg' => 'لاتوجد منشورات'])
      <div class="row mb-2">
        @foreach ($contents->posts as $post)
          <div class="col-lg-3 col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
              </div>
            </div>
            <div class="dropdown">
              <a href="{{ route('post.show', $post->id) }}" class="dropdown-toggle link">
                <span>المزيد</span>
              </a>
              <div class="dropdown-menu">
                <a href="" class="dropdown-item">تعديل</a>
                <a href="" class="dropdown-item">حذف</a>
              </div>
            </div>
          </div>            
        @endforeach
        
        @else 

        @includeWhen(!count($contents->comments), 'alerts.empty', ['msg' => 'لاتوجد تعليقات'])
        @foreach ($contents->comments as $comment)
            <div class="row bg-white mb-2 p-3">
              <div class="col-lg-12 border-bottom p-2 text-wrap">
                <a href="">
                  <p class="card-text">{{ Str::limit($comment->body, 50) }}</p>
                </a>
              </div>
              <div class="mt-2">
                <h6><small></small></h6>
              </div>
            </div>
        @endforeach
        @endif 
      </div>
    </div>
  </div>
</div>    
@endsection