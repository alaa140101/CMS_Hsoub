<?php

namespace App\Http\ViewComposers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Page;

class PageComposer
{
     /**
     * The user repository implementation.
     *
     * @var \App\Models\Page
     */
    protected $pages;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Models\Page  $pages
     * @return void
     */
    public function __construct(Page $page)
    {
        // Dependencies are automatically resolved by the service container...
        $this->pages = $page;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        return $view->with('pages', $this->pages->all());
    }
}