<?php

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

Route::get('/test', function () {
    return view('test', ['name'=> request('name')]);
});

Route::get('/posts/{post}', 'postsController@show');

Route::get('/cars/{car_id}', 'CarsController@show');

//Route::get('/posts/{post}', function ($p) {
//    return $p;
//    return view('wawposts');
//});


Route::get('/about', function () {
    //$article = App\Article::all();
    //$article = App\Article::take(2)->get();
    //$article = App\Article::paginate(2);
    //$article = App\Article::latest('updated_at')->get();
    //$article = App\Article::latest()->get();

    return view('about',['articles'=>App\Article::take(3)->latest()->get()]);
});

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
