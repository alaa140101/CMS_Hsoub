<?php 

namespace App\Traits;

use Intervention\Image\Facades\Image;


trait ImageUploadTrait
{
  protected $image_path = "public/storage/uploads";
  protected  $image_height = 400;
  protected $image_width = 600;

  public function uploadImage($img)
  {
    $img_name = $this->imageName($img);
    \Image::make($img)->resize($this->img_width, $this->img_height)->save(storage_path($this->image_path.'/'.$img_name));
    return $img_name;
  }

  public function imageName($image)
  {
    return time().'-'.$image->getClientOriginalName();
  }
}