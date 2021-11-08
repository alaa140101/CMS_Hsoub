@extends('layouts.app')

@section('content')
<div class="container">
  <h4>تعديل البيانات الشخصية</h4>
  <form action="{{route('settings')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-lg-4 text-center">
      <img src="{{ $user->profile->avatar ?? 'avatars/'.asset('storage/avatars/avatar.jpg') }}" alt="avatar" class="profile mb-2" style="height: 100px;width:100px;">
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
  </form>
  </div>
@endsection