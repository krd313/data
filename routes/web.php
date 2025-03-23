<?php

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PriorityController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {

    $articles = Article::where('user_id', Auth::id())->get();
    return view('dashboard', compact('articles'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/articles', ArticleController::class)->only(['index', 'show']);

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/articles', ArticleController::class)->except(['index', 'show']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::resource('blog', BlogController::class);

Route::resource('priority', PriorityController::class);
Route::resource('category', CategoryController::class);
Route::resource('task', TaskController::class);

Route::resource('member', MemberController::class);



});

require __DIR__.'/auth.php';
