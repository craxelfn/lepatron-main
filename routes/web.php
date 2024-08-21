<?php

use App\Http\Controllers\FrontEndController;
use App\Models\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use MattDaneshvar\Survey\Models\Survey;
use Jenssegers\Agent\Agent;
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




Route::middleware(['auth','admin'])->prefix('admin')->as('admin.')->group(function() {
    // Route::get('/',AdminIndex::class);
    Route::get('/user',\App\Http\Livewire\Admin\User\UserIndex::class)->name('user.index')->can('viewAny', \App\Models\User::class);
    Route::get('/category',\App\Http\Livewire\Admin\Category\CategoryIndex::class)->name('category.index')->can('viewAny', \App\Models\Category::class);
    Route::get('/roles',\App\Http\Livewire\Admin\Role\RoleIndex::class)->name('role.index')->can('viewAny', \App\Models\Role::class);
    Route::get('/inscrits',\App\Http\Livewire\Admin\Inscrit\InscritIndex::class)->name('inscrit.index')->can('viewAny', \App\Models\Inscrit::class);
    Route::get('/posts',\App\Http\Livewire\Admin\Post\PostIndex::class)->name('post.index')->can('viewAny', \App\Models\Post::class);
    Route::get('/posts/create',\App\Http\Livewire\Admin\Post\PostCreate::class)->name('post.create')->can('create', \App\Models\Post::class);
    Route::get('/posts/update/{id}',\App\Http\Livewire\Admin\Post\PostUpdate::class)->name('post.update')->can('viewAny', \App\Models\Post::class);
    Route::get('/media',\App\Http\Livewire\Admin\Menu\MenuIndex::class)->name('menu.index');

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth','admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/', [FrontEndController::class,'homepage']);
Route::get('/{category}', [FrontEndController::class,'category'])->name("category.index");
Route::get('/{category}/{article}/{id}', [FrontEndController::class,'article'])->name("post.index");

















