@extends('admin.app')

@section('breadcrumb')
        تعيين الصلاحيات إلى الادوار
@endsection

@section('content')

  <div class="container-fluid">
    <div class="card mb-3">
      <form action="{{route('permissions')}}" method="post">
        @csrf
        <div class="card-header">
          <div class="col-lg-6 form-group">
            <label for="role_id"></label>
            <select name="role_id" id="role_id" class="form-control">
              @include('lists.roles')
            </select>
          </div>
        </div>
        <div class="row p-3">
          @foreach ($permissions as $permission)
          <div class="form-check col-4 p-3">
            <div class="ml-15">
              <input class="form-check-input" type="checkbox" name="permission[]" id="" value="{{ $permission->id }}" id="permission">
            </div>
            <label class="form-check-label" for="permission">
              {{ $permission->desc}}
            </label>
          </div>
          @endforeach
        </div>       
        <div class="card-footer small text-muted">
          <div class="col-12">
            <button type="submit" class="btn btn-primary">تحديث</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection 