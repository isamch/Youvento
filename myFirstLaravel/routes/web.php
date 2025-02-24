<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\UserController;

use  App\Http\Controllers\Admin\ArticleController;


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




Route::get('users', [UserController::class, 'index']);


Route::get('/users/{id}', [UserController::class, 'getUserById']);

// Route::get('article', [ArticleController::class, 'index']);

// Route::get('article/{id}', [ArticleController::class, 'getArticleById']);

// prefex:
Route::prefix('admin')->group(function () {
    Route::get('article', [ArticleController::class, 'index']);
    Route::get('article/{id}', [ArticleController::class, 'getArticleById']);
});





Route::get('/users/{id}', [UserController::class, 'getUserById'])->middleware('example', 'tt');



// Route::get('category', );
