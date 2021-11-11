<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AdminPostController;
use App\Http\Controllers\admin\AdminPermissionController;
use App\Http\Controllers\admin\AdminRoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/index', function () {
//     return view('index');
// });

Auth::routes(['verify' => true]);


Route::get('/', [PostController::class, 'index']);

Route::resource('post', PostController::class)->except(['index']);

Route::get('{id}/{slug}', [PostController::class, 'getByCategory'])->name('category')->where('id', '[0-9]+');

Route::post('/search', [PostController::class, 'search'])->name('search');

Route::resource('comment', CommentController::class);

Route::get('user/{id}', [ProfileController::class, 'getByUser'])->name('profile');

Route::get('user/{id}/comments', [ProfileController::class, 'getCommentsByUser']);

Route::get('settings', [ProfileController::class, 'settings'])->name('settings');

Route::post('settings', [ProfileController::class, 'updateProfile'])->name('settings');

// Route::get('/admin/index', function () {
//     return view('admin.index');
// });

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/dashboard', ['as'=>'dashboard','uses'=> [DashboardController::class, 'index']])->middleware('Admin');


// Route::resource('admin/posts', AdminPostController::class);

// Route::resource('admin/permissions', AdminPermissionController::class);

Route::prefix('admin')->group( function () {
  Route::resource('posts', AdminPostController::class);
  Route::get('permissions', [AdminPermissionController::class, 'index'])->name('permissions.index');
  Route::post('permissions', [AdminRoleController::class, 'store'])->name('permissions');
});

Route::post('permission/byRole', [AdminRoleController::class, 'getByRole'])->name('permission_byRole');


