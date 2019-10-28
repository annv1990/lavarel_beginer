<?php

use App\Post;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insertpost', function () {
    DB::insert('insert into posts(title, content) values (?,?)', ["PHP title", "PHP content"]);
    DB::insert('insert into posts(title, content) values (?,?)', ["PHP title 1 ", "PHP content 2"]);
});

Route::get('/readpost', function () {
    $results = DB::select('select * from posts');
    return var_dump($results);
});

Route::get('/updatepost', function () {
    DB::update('update posts set title = "update title PHP" where id=?', [1]);
});


/*
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

/*
 * ELOQUENT
 */
Route::get('/find', function () {
    $posts = Post::all();
    $postABC = \App\PostABC::find(1);
    $allTitle = "";
    foreach ($posts as $post) {
        $allTitle .= $post->title;
    }
    $allTitle .= $postABC->content;
    return $allTitle;
});