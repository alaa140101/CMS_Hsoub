@extends('layouts.app')

@section('content')
<div class="col-md-8">
  <div class="content bg-white p-5">
    <h2 class="my-4">
      {{ $post->title }}
    </h2>
    <img src="{{ $post->image_path }}" alt="" class="card-img-top mb-4">
    {{ $post->body }}
  </div>
</div>

@include('partials.sidebar')
@endsection