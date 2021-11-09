<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    User,
    Post,
    Comment,
    Category,
};


class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index')
        ->with('post_count', Post::count())
        ->with('users_count', User::count())
        ->with('comments_count', Comment::count())
        ->with('categories_count', Category::count());
    }
}
