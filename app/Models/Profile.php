<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'website',
        'bio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAvatarAttribute($avatar)
    {
        return asset('storage/'.$avatar);
    }
}
