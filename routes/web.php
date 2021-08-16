<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('curso/{course:slug}',[PageController::class,'course'])->name('course');

Route::post('postsave',[PostController::class,'savepost'])->name('savepost');
Route::get('createpost',[PostController::class, 'indexPost'])->name('indexPost');
Route::delete('post/{post}', [PostController::class,'destroy']);

Route::get('showpost', [PostController::class, 'showPost'])->name('showPost');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
