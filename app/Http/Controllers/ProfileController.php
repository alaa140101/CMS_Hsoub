<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getByUser($id)
    {
        $contents = $this->user->with('profile', 'posts')->find($id);
        return view('user.profile', compact('contents'));
    }

    public function getCommentsByUser($id)
    {
        $contents = $this->user->with('profile', 'comments')->find($id);
        return view('user.profile', compact('contents'));
    }
}
