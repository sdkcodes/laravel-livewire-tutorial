<?php


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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/create', [\App\Http\Livewire\CreatePost::class, '__invoke'])->middleware('auth');
// Route::get('admin/posts', [\App\Http\Livewire\ListPost::class, '__invoke'])->middleware('auth');

Route::get('post-alert', [\App\Http\Livewire\PostAlert::class, '__invoke']);
