<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/articles');
});

Auth::routes();

Route::get('/articles', [HomeController::class, 'index']);
Route::get('/addarticle', [HomeController::class, 'addArticle']);
Route::get('/updatearticle/{article}', [HomeController::class, 'updateArticle']);
Route::get('/categories', [HomeController::class, 'categories']);
Route::get('/addcategory', [HomeController::class, 'addCategory']);
Route::get('/updatecategory/{category}', [HomeController::class, 'updateCategory']);
