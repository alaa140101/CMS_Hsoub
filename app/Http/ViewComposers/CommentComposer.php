<?php

namespace App\Http\ViewComposers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Comment;

class CommentComposer
{
     /**
     * The user repository implementation.
     *
     * @var \App\Models\Comment
     */
    protected $comments;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Models\Comment  $comments
     * @return void
     */
    public function __construct(Comment $comments)
    {
        // Dependencies are automatically resolved by the service container...
        $this->comments = $comments;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        return $view->with('recent_comments', $this->comments::with('post')->take(5)->latest()->get());
    }
}