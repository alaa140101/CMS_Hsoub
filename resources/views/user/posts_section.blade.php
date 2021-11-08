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