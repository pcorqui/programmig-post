<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectsController;

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

//esta es solo una pagina al estilo motherfucker website
Route::get('/presentacion',function(){
    return view('presentacion');
});

//ruta origina del curso de itale php laravel 8
//Route::get('/',[PageController::class,'home'])->name('home');
Route::get('curso/{course:slug}',[PageController::class,'course'])->name('course');

Route::get('posts',[PostController::class, 'listposts']);
Route::get('post/{post}',[PostController::class,'post'])->name('post');
/*Route::get('posts',function(){
    return view('postlist');
});*/

//aqui tenia pensado guardar post talvez lo deje como notas de estudio
Route::post('postsave',[PostController::class,'savepost'])->name('savepost');
Route::get('createpost',[PostController::class, 'indexPost'])->name('indexPost');
Route::delete('post/{post}', [PostController::class,'destroy']);
Route::get('showpost', [PostController::class, 'showPost'])->name('showPost');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//pagina de inicio pero creada con boostraps cdn aqui quisiera comenzar e ir quitandole lo de twiling y livewire
//segundo paso poner la tabla de tecnologias y poner a que tecnologia corresponde cada proyecto
//lo apuntare a un link de github los que sean front y mobile
Route::get('/',[ProjectsController::class, 'showPostBootstrap']);

//api
