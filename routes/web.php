<?php

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

Route::resource('/home', 'Pages\HomesController')->only('index');
Route::resource('/author', 'Pages\AuthorController');
Route::resource('/', 'Pages\ArticleController');
// Route::resource('/comments', 'Pages\CommentsController')->only('store','create');
Route::get('/comments', 'Pages\CommentsController@store')->name('comments.store');
Route::get('/comments/create', 'Pages\CommentsController@create')->name('comments.create');
Route::resource('/editor', 'Pages\CKEditorController');
Route::post('ckeditor/image_upload', 'Pages\CKEditorController@upload')->name('upload');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
