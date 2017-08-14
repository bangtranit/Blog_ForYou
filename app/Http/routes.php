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

// Route::get('/', function () {
//     return view('welcome');
// });


///AUTHOR
get('login',[
	'as'  => 'author.login',
	'uses'=> 'LoginController@index'
	]);

post('login',[
	'as'  => 'author.checkLogin',
	'uses'=> 'LoginController@checkLogin'
	]);

get('signup',[
	'as'  => 'author.signup',
	'uses'=> 'SignupController@index'
	]);

post('signup',[
	'as'  => 'author.checkSignup',
	'uses'=> 'SignupController@checkSignup'
	]);

//LIST
get('articles',[
	'as'   => 'articles.index',
	'uses' => 'ArticlesController@index'
	]);

get ('article/{id}/edit',[
	'as'  => 'article.edit',
	'uses'=> 'ArticlesController@edit'
	]);

put ('article/{id}',[
	'as'  => 'article.update',
	'uses'=> 'ArticlesController@update'
	]);

get('articles/{id}',[
	'as'  => 'article.show',
	'uses'=> 'ArticlesController@show'
	]);

get('article/create',[
	'as'  => 'article.create',
	'uses'=> 'ArticlesController@create'
	]);

post('articles',[
	'as'  => 'article.store',
	'uses'=> 'ArticlesController@store'
	]);

delete('articles/{id}',[
	'as'  => 'article.delete',
	'uses'=> 'ArticlesController@delete'
	]);



