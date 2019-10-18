<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Hi about";
});

Route::get('/contact', function () {
    return "Hi An, Admin here";
});



Route::get('/post/{id}/{name}', function ($id, $name) {
    return "This is post number ".$id . " and ". $name ;
});

Route::get('/admin/posts', array('as' => 'admin.home',function () {
    $urlHome = route('admin.home');
    return "Hi An, Admin here ". $urlHome;
}));*/

//Route::get('/post/{id}', 'PostsController@index');

//Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');

Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');