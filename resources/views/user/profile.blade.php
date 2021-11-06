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
          <a href="" class="nav-link"></a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link"></a>
        </li>
      </ul>
    </div>
  </div>
</div>    
@endsection