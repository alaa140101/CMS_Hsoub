@includeWhen(!count($contents->comments), 'alerts.empty', ['msg' => 'لاتوجد تعليقات'])
  @foreach ($contents->comments as $comment)
      <div class="row bg-white mb-2 p-3">
        <div class="col-lg-12 border-bottom p-2 text-wrap">
          <a href="{{ route('post.show', $comment->post->id) }}#comments">
            <p class="card-text">{{ Str::limit($comment->body, 50) }}</p>
          </a>
        </div>
        <div class="mt-2">
          <h6><small></small></h6>
        </div>
      </div>
  @endforeach