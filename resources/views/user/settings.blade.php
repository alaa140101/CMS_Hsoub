@extends('layouts.app')

@section('content')
<div class="container">
  <h4>تعديل البيانات الشخصية</h4>
  <form action="{{route('settings')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row bg-white p-5">
    <div class="col-lg-4 text-center mb-5">
      <img id="avatar_img" src="{{ $user->profile->avatar ?? asset('storage/avatars/avatar.jpg') }}" alt="avatar" class="rounded-circle">
      <input type="file" name="avatar_file" id="avatar_file" class="d-none">
    </div>
    <div class="col-lg-8">
      <div class="form-group row">
        <label for="" class="col-lg-3">اسم المستخدم</label>  
        <div class="col-lg-9">
          <input type="text" name="name" id="" class="form-control" value="{{ $user->name}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-lg-3">البريد الالكتروني</label>  
        <div class="col-lg-9">
          <input type="text" name="email" id="" class="form-control" value="{{$user->email}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="website" class="col-lg-3">الموقع الشخصي</label>  
        <div class="col-lg-9">
          <input type="text" name="website" id="" class="form-control" value="{{ optional($user->profile)->website}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="bio" class="col-lg-3">نبذة عني</label>  
        <div class="col-lg-9">
          <textarea rows="5" name="bio" id="" class="form-control"> {{optional($user->profile)->bio}}</textarea>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-9">
          <input type="submit" value="حفظ التعديلات" class="btn btn-secondary">
          <input type="reset" value="إلغاء" class="btn btn-secondary">
        </div>
      </div>
    </div>
  </div>
  </form>
  </div>
@endsection

@section('script')
<script>
  $('#avatar_img').click(function(){
    $("input[id='avatar_file']").click();
  });

  $("#avatar_file").change(function(){
    var reader = new FileReader();
    reader.onload = function(){
      $("#avatar_img").addClass("avatar_preview").attr("src", reader.result);
    }

    reader.readAsDataURL(event.target.files[0]);
  });


</script>    
@endsection