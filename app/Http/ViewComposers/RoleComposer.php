<?php

namespace App\Http\ViewComposers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Role;

class RoleComposer
{
     /**
     * The user repository implementation.
     *
     * @var \App\Models\Role
     */
    protected $roles;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Models\Role  $roles
     * @return void
     */
    public function __construct(Role $roles)
    {
        // Dependencies are automatically resolved by the service container...
        $this->roles = $roles;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        return $view->with('roles', $this->roles->all());
    }
}