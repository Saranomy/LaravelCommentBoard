<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

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
Route::get('/', 'CommentController@home');
Route::post('/post', 'CommentController@post');
Route::get('/comment/{id}', 'CommentController@view');
Route::get('/comment/{id}/edit', 'CommentController@edit');
Route::post('/comment/{id}/update', 'CommentController@update');
Route::get('/comment/{id}/delete', 'CommentController@delete');