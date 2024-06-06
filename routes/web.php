<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->named(('home'));

Route::controller(\App\Http\Controllers\ArticleController::class)->group('function')(){
   Route::get('/articles','list')->name('article.list');
    Route:: match (['get','post'],'article/create','create')->name('article.create')
});