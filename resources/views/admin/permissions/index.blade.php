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
          <div class="col-4">
              <input class="" type="checkbox" name="permission[]" id="" value="{{ $permission->id }}" id="permission">
            <label class="form-check-label" for="permission">
              {{ $permission->name}}
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

@section('script')
  <script>

    $('#role_id').on('change', function(event){
      var role_id = $(this).val();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '{{ route("permission_byRole") }}',
        type: 'post',
        data: {
          'id': role_id
        },
        success: function(data){
          $('input[type=checkbox]').each(function(){
            var ThisVal = parseInt(this.value);
            if (data.includes(ThisVal)) 
              this.checked = true;
            else
              this.checked = false;
          });
        }
      });
    });
  </script>
@endsection