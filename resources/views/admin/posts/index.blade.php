@extends('admin.app')

@section('breadcrumb')
        المنشورات
@endsection

@section('content')

  <div class="container-fluid">
    <div class="card-mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>
        المنشورات
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table-bordered table" id="dataTable">
            <thead>
              <tr>
                <th>الرقم</th>
                <th>العنوان</th>
                <th>الاسم اللطيف</th>
                <th>المحتوى</th>
                <th>الكاتب</th>
                <th>نشر</th>
                <th>التصنيف</th>
                <th>تحرير</th>
                <th>حذف</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ Str::limit($post->body, 50) }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td> <input type="checkbox" name="" id="" value="{{ $post->approved }}" {{ $post->approved ? 'checked' : ''}}></td>
                    <td>{{ $post->category->title }}</td>
                    <td>
                      <a href="{{route('posts.edit', $post->id)}}">
                        <i class="fa fa-edit fa-2x"></i>
                      </a>
                    </td>
                    <td>
                      <form action="" method="POST">
                        @csrf
                        <button class="btn btn-link"><i class="fa fa-trash fa-2x"></i></button>
                      </form>
                    </td>
                  </tr>
              @endforeach
              <div class="col-md-8 mt-10">{{ $posts->links() }}</div>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>
  </div>
</div>
@endsection