<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class AdminPostController extends Controller
{
    public $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post::with('user','category')->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }

    public function edit($id)
    {
        $post = $this->post::find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request['approved'] = $request->has('approved');
        
        $this->post::find($id)->update($request->all());

        return back()->with('success', trans('alerts.success'));
    }

    public function destroy(Post $post)
    {
        if($post->id == null){
            abort(404);
        }

        $this->authorize('delete', $post);

        $post->delete();

        // Storage::delete("public/".$post->image_path);

        return redirect(auth()->user()->username);
    }
}
