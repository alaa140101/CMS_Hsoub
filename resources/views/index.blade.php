@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <h2 class="my-4">
        المنشورات
        @foreach ($posts as $post)
            <div class="card mb-4">
                <img src="{{ asset('storage/'.$post->image_path) }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <p class="card-text">{{ $post->body }}</p>
                    <a href="" class="btn btn-primary">المزيد</a>
                </div>
                <div class="card-footer text muted">
                    {{ $post->created_at->diffForHumans() }}
                   By <a href="">{{ $post->user->name }}</a>
                </div>
            </div>
        @endforeach
    </h2>
</div>
@include('partials.sidebar')
@endsection