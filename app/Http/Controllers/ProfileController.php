<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ImageUploadTrait;

class ProfileController extends Controller
{
    use ImageUploadTrait;
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
        $contents = $this->user->with('profile', 'comments.post')->find($id);
        return view('user.profile', compact('contents'));
    }

    public function settings()
    {
        $user = $this->user->with('profile')->find(auth()->id());

        return view('user.settings', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        if($request->hasFile('avatar_file'))
        {
            $avatar = $this->uploadAvatar($request->avatar_file);
            $request->merge(['avatar' => 'avatars/'.$avatar]);
        }

        auth()->user()->update($request->only(['name', 'email']));
        auth()->user()->profile()->updateOrCreate(['user_id'=>\Auth::id()], $request->only(['website', 'bio', 'avatar']));

        return back()->with('success', trans('alerts.success'));
    }
}
