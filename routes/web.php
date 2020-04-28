<?php

use App\Hakkimizda;
use App\Http\Controllers\HakkimizdaController;
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

Route::get('/','HomeController@index' )->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::post('comment/save','CommentController@save')->name('comment.save');
});

Route::group(['middleware'=>'auth', 'prefix' => 'admin'], function() {
    Route::get('Hakkimizda/form','HakkimizdaController@form')->name('Hakkimizda.form');
    Route::post('Hakkimizda/save','HakkimizdaController@save')->name('Hakkimizda.save');
    Route::get('Hakkimizda/{id}/form','HakkimizdaController@form') ->name('Hakkimizda.form.edit');
    Route::get('Hakkimizda/{id}/delete','HakkimizdaController@delete') ->name('Hakkimizda.delete');
    Route::get('post/form', 'PostController@form') ->name('post.form');
    Route::post('post/save', 'PostController@save') ->name('post.save');
    Route::get('post/{id}/form','PostController@form') ->name('post.form.edit');
    Route::get('post/{id}/delete','PostController@delete') ->name('post.delete');
    Route::get('post/{id}','PostController@show') ->name('post.show');
});    

