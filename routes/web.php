<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\ProductApiController;
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
Route::get('/',[PostControlleur::class,'home'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('permission', App\Http\Controllers\PermissionController::class);
Route::resource('role', App\Http\Controllers\RoleController::class);
Route::resource('categories', App\Http\Controllers\CategorieController::class);
//Route::resource('images', App\Http\Controllers\ImageController::class);
Route::resource('articles', App\Http\Controllers\ArticleController::class);
Route::resource('configs', App\Http\Controllers\ConfigController::class);
Route::resource('supplements', App\Http\Controllers\SupplementController::class);

//Route::get('/images/{id}','App\Http\Controllers\ArticleController@listImageByarticle');
    Route::delete('/deleteimage/{id}',[App\Http\Controllers\ArticleController::class,'deleteimage']);
    Route::delete('/deletecover/{id}',[App\Http\Controllers\ArticleController::class,'deletecover']);

   //Route::get('articles/images/{id}',[App\Http\Controllers\ArticleController::class,'images'])->name('article.images');


//********************api routing******************/   
Route::get('/api/categories',[CategoryApiController::class,'index'])->name('api-catgories');
Route::get('/api/products/{id}',[ProductApiController::class,'index'])->name('api-get-products-by-category');

//********************end api routing******************/   
