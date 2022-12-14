<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
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

Route::get('/profile/{user}',[ProfilesController::class,'index'])->name('profile.show');
Route::get('/profile/{user}/edit',[ProfilesController::class,'edit'])->name('profile.edit');
Route::patch('/profile/{user}',[ProfilesController::class,'update'])->name('profile.update');
Route::get('/p/create',[PostsController::class,'create']);
Route::post('/p',[PostsController::class,'store']);
Route::get('/p/{posts}',[PostsController::class,'show']);

Route::get('/dashboard', function () {
    return view('profiles.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';