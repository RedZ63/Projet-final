<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/posts/show{post}', [PostController::class, 'show'])
->name('posts.show');



Route::get('/blog', [PostController::class, 'index'])
    ->name('posts.index');

    Route::get('/', [FrontController::class, 'accueil'])
    ->name('/accueil');



Route::get('qsn', function() {
    return view('/qsn');
});

Route::get('nos_services', function() {
    return view('/nos_services');
});


Route::get('contact', function() {
    return view('/contact');
});

Route::get('parrainage', function() {
    return view('/parrainage');
});



Route::middleware(['auth'])->group(function() {

    Route::resource('posts', PostController::class)
    ->except(['index','show']);

   
    Route::resource('comments', CommentController::class)
    ->only(['index', 'edit', 'update', 'destroy'])
        ->middleware(['auth', 'verified']);
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
   

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
