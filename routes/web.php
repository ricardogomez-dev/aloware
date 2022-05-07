<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NestedCommentController;

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

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::post('/nested-comments', [NestedCommentController::class, 'store'])->name('nested_comments.store');