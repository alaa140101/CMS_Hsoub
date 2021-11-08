<?php 

namespace App\Traits;

use Intervention\Image\Facades\Image;


trait ImageUploadTrait
{
  protected $image_path = "app/public/uploads";
  protected  $image_height = 400;
  protected $image_width = 600;

  protected $avatar_path = "app/public/avatars";
  protected  $avatar_height = 200;
  protected $avatar_width = 200;

  public function uploadImage($img)
  {
    $img_name = $this->imageName($img);
    Image::make($img)->resize($this->image_width, $this->image_height)->save(storage_path($this->image_path.'/'.$img_name));
    return $img_name;
  }

  public function imageName($image)
  {
    return time().'-'.$image->getClientOriginalName();
  }

  public function uploadAvatar($img)
  {
    $img_name = $this->imageName($img);
    Image::make($img)->resize($this->avatar_width, $this->avatar_height)->save(storage_path($this->avatar_path.'/'.$img_name));
    return $img_name;
  }
}