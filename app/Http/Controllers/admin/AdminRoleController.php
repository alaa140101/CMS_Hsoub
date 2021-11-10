<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class AdminRoleController extends Controller
{
    public $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
