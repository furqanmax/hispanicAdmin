<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



ROute::middleware('api')->group(function () {
    Route::post('/login', 'Api\LoginController@login');
    Route::post('/register', 'Api\LoginController@register');

    Route::post('/dashboard', 'Api\DashboardController@dashboard');

    Route::get('/categories', 'Api\CategoryController@categories');
    Route::get('/user/{id}/posts', 'Api\PostController@userPosts');

    Route::get('/user/profile', 'Api\ProfileController@getProfile');


    Route::post('create', 'Api\PasswordResetController@create');
    Route::get('find/{token}', 'Api\PasswordResetController@find');
    Route::post('reset', 'Api\PasswordResetController@reset');

    Route::get('/allPost', 'Api\PostController@allPost');
    Route::post('/addPost', 'Api\PostController@addPost');
    Route::put('/updatePost', 'Api\PostController@updatePost');
    Route::post('/deletePost/{id}', 'Api\PostController@deletePost');

    Route::post('/search', 'Api\PostController@search');


});
