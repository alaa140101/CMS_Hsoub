@extends('admin.app')

@section('breadcrumb')
        تعيين الصلاحيات إلى الادوار
@endsection

@section('content')

  <div class="container-fluid">
    <div class="card mb-3">
      <form action="" method="post">
        @csrf
        <div class="card-header">
          <div class="col-lg-6 form-group">
            <label for="role_id"></label>
            <select name="role_id" id="role_id" class="form-control">
              {{-- @include('lists.roles') --}}
            </select>
          </div>
        </div>
        <div class="card-body row">
          @foreach ($permissions as $permission)
              <div class="col-lg-4">
                <label for="permission">
                  <input type="checkbox" name="permission[]" id="" value="{{ $permission->id }}">
                  {{ $permission->desc}}
                </label>
              </div>
          @endforeach
        </div>
        <div class="card-footer small text-muted">

        </div>
      </form>
    </div>
  </div>
@endsection 