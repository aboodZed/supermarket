<?php

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
    return view('welcome');
});

//get and resource
Route::resource('product', 'ProductController');
Route::get('product/soft/delete/{id}', 'ProductController@softDelete')->name('soft.delete');
Route::get('product/trash/all', 'ProductController@trashedProducts')->name('product.trash');
Route::get('product/trash/back/{id}', 'ProductController@backFromSoftDelete')->name('product.back.from.trash');
Route::get('product/trash/delete/{id}', 'ProductController@deleteForEver')->name('product.delete.from.trash');

//auth
Auth::routes();

//home
Route::get('/home', 'HomeController@index')->name('home');

//one to one    --profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile/update', 'ProfileController@update')->name('profile.update');

//one to many   --posts
Route::resource('posts', 'PostController');
Route::get('posts/hard/delete/{id}', 'PostController@hDelete')->name('posts.hDelete');
Route::get('posts/restore/{id}', 'PostController@restore')->name('posts.restore');
Route::get('posts/trash/all', 'PostController@trashedPosts')->name('posts.trash');

//many to many   ==Tags
Route::resource('tags', 'TagController');

//users
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/destroy/{id}', 'UserController@destroy')->name('users.destroy');
