@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <h2 class="my-4">المنشورات </h2>

    @includeWhen(!count($posts), 'alerts.empty', ['msg' => 'لاتوجد منشورات'])

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

        <!-- Pagination -->
        {{-- <ul class="pagination justify-content-cneter mb-4">
            {{ $posts->links() }}
        </ul> --}}
        <div class="col-md-8 mt-10">{{ $posts->links() }}</div>

</div>
@include('partials.sidebar')
@endsection