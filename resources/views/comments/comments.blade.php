<div class="row bg-white mt-3">
  <div class="col-lg-1 p-3">
    <img src="{{ asset('storage/avatars/avatar.jpg') }}" alt="" class="avatar" >
  </div>
  <div class="col-lg-7 p-3">
    {{ $comment->body }}
  </div>
  <div class="col-lg-4 p-3">
    {{ $comment->user->name }}
  </div>

</div>