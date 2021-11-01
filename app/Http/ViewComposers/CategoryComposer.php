<?php

namespace App\Http\ViewComposers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Category;

class CategoryComposer
{
     /**
     * The user repository implementation.
     *
     * @var \App\Models\Category
     */
    protected $categories;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Models\Category  $categories
     * @return void
     */
    public function __construct(Category $categories)
    {
        // Dependencies are automatically resolved by the service container...
        $this->categories = $categories;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories->all());
    }
}