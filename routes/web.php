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
Route::pattern('id','[0-9]*');
Route::pattern('cid','[0-9]*');
Route::pattern('slug','(.*)');
Route::namespace('Aboutme')->group(function(){
	Route::get('/',[
		'uses' => 'IndexController@index',
		'as' => 'aboutme.index.index'
	]);
	Route::get('/tin-tuc',[
		'uses' => 'NewsController@index',
		'as' => 'aboutme.news.index'
	]);
	Route::get('/tin-tuc/{slug}-{id}',[
		'uses' => 'NewsController@detail',
		'as' => 'aboutme.news.detail'
	]);
	Route::get('/du-an',[
		'uses' => 'ProjectController@index',
		'as' => 'aboutme.project.index'
	]);
	Route::get('/about',[
		'uses' => 'AboutController@index',
		'as' => 'aboutme.about.index'
	]);
	Route::get('/lien-he',[
		'uses' => 'ContactController@getIndex',
		'as' => 'aboutme.contact.index'
	]);
	Route::post('/lien-he',[
		'uses' => 'ContactController@postIndex',
		'as' => 'aboutme.contact.index'
	]);
});
Route::namespace('Admin')->group(function(){
	Route::get('/admin',[
		'uses' => 'IndexController@index',
		'as' => 'admin.index.index'
	]);
	Route::get('/admin/edit/{id}',[
		'uses' => 'IndexController@edit',
		'as' => 'admin.index.edit'
	]);
});