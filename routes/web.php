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

Auth::routes();

Route::get('/', 'DashboardController@redirect')->name('home');
Route::group(['prefix' => '{language}', 'middleware' => 'auth'], function() {
    if(isset(request()->language)){
        App::setLocale(request()->language);
    } else {
        App::setLocale(Request::segment(1));
    }

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => '/profile', 'middleware' => 'auth'], function() {
        Route::group(['prefix' => '/posts', 'middleware' => 'auth'], function() {
            Route::get('/', 'PostController@index')->name('profile_posts');
            Route::post('/store', 'PostController@store')->name('profile_posts_store');
            Route::post('/delete', 'PostController@destroy')->name('profile_posts_delete');
        });
        Route::get('/like', 'PostLikeController@store')->name('profile_posts_like');
        Route::post('/store-comment', 'PostCommentController@store')->name('profile_posts_comments_store');
        Route::post('/edit-user', 'UsersController@update')->name('users_update');
    });

});
