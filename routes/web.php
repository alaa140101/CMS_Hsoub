<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
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

Route::get('/admin/index', function () {
    return view('admin.index');
});

