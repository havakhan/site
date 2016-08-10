<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



        Route::group(['middleware' => 'web'], function () {
        Route::auth();
        Route::get('/', 'GlagneController@index');
        Route::get('/index', 'GlagneController@index');
        Route::get('/glagne', 'GlagneController@index');
        Route::get('/zlogen', 'ZlogenController@index');
        Route::get('/forum', 'ForumController@index');
        Route::get('/vkgroup', 'VkgroupController@index');

        Route::get('/users/{id}','UsersController@showprofile@id');
        Route::get('/myprofile','UsersController@showmyprofile');

        Route::get('/users/','UsersController@showallprofile');
        Route::get('/newpsto','PostController@CreatePost');
        Route::post('/store.post','PostController@store');
        Route::get('/posts/{id}','CommentController@ShowPostAndCooments@id');
        Route::post('/store.comment/{id}','CommentController@store@id');
        Route::get('/pepyaka.up/{id}','PepyakaController@upPepyakaPost@id');
        Route::get('/pepyaka.down/{id}','PepyakaController@downPepyakaPost@id');
        Route::get('/pepyaka.show/{id}','PepyakaController@showPepyakaPost@id');
});


//Route::boot(){$router->pattern('id', '[0-9]+')}; store.comment
