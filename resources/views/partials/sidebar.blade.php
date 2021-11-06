<!-- Sidbar Widgets Column -->
<div class="col-md-4 mt-3">
  <!-- Categories Widgets -->
  <div class="card">
      <h5 class="care-header">التصنيفات</h5>
      <div class="card-body">
          <ul class="nav flex-column">
            @foreach ($categories as $category)
                <li class="nav-item">
                    <a href="/{{ $category->id }}/{{ $category->slug }}" class="nav-link">{{ $category->title }}</a>
                </li>
            @endforeach
          </ul>
      </div>
  </div>

  <!-- Side Widgets -->
  <div class="card my-4 text-right">
      <h5 class="card-header">اخر التعليقات</h5>
      <ul class="list-group p-2 flex-column">
        @foreach ($recent_comments as $comment)
            <li class="list-group p-2 flex-row">
                <img src="{{ asset('storage/avatars/avatar2.jpg') }}" alt="" class="avatar ml-2">
                <a href="{{ route('post.show', $comment->post->id)}}#comments">{{ Str::limit($comment->body, 30) }}</a>
            </li>
        @endforeach
      </ul>
  </div>
</div>