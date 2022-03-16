<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/index', function () {
    return view('index');
})->name("index");

Route::get('/students', function () {
    return view('students');
})->name("students");

// Route::get('perfils', [PerfilController::class, 'index']);
// Route::get('add-perfil', [PerfilController::class, 'create']);
// Route::post('add-perfil', [PerfilController::class, 'store']);
// Route::get('edit-perfil/{id}', [PerfilController::class, 'edit']);
// Route::put('update-perfil/{id}', [PerfilController::class, 'update']);
// Route::delete('delete-perfil/{id}', [PerfilController::class, 'destroy']);

Route::get('posts', [PostController::class, 'index']);
Route::get('add-post', [PostController::class, 'create']);
Route::post('add-post', [PostController::class, 'store']);
Route::get('edit-post/{id}', [PostController::class, 'edit']);
Route::put('update-post/{id}', [PostController::class, 'update']);
Route::delete('delete-posts/{id}', [PostController::class, 'destroy']);

// Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('messages', 'App\Http\Controllers\MessageController');

Route::get('/map', function () {
    return view('map');
})->name("map");

Route::get('/markAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');

Route::post('/mark-as-read', 'MessageController@markNotification')->name('markNotification');

Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);

Route::get('/users', [RegisteredUserController::class, 'index']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
