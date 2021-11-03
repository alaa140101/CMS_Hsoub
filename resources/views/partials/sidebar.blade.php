<!-- Sidbar Widgets Column -->
<div class="col-md-4">
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
      <ul class="list-group p-0">

      </ul>
  </div>
</div>