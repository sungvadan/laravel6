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

Route::get('/test', 'HomeController@test');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
;

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(2)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::put('/articles/{article}', 'ArticlesController@update');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');




Route::get('/posts/{slug}', 'PostsController@show');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store');

Route::get('/payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('/payments', 'PaymentsController@store')->middleware('auth');

Route::get('/notifications', 'UserNotificationsController@show')->middleware('auth');

Route::get('/conversations/', 'ConversationsController@index');
Route::get('/conversations/{conversation}', 'ConversationsController@show');
Route::post('/best-reply/{reply}', 'RepliesController@update');
