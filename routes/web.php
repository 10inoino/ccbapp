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

// Route::get('/', function () {
//     return view('player_list');
// });

// Route::get('/', 'c_player_list@index');
Route::get('/', function () {return view('player_list.v_player_list');});
Route::get('test', function () {return view('player_list.v_player_list_test');});

// herokuに選手名鑑を出している間はコメントアウト
// Route::get('player_list/edit', 'c_player_list@edit');
// Route::post('player_list/edit', 'c_player_list@update');

// Route::get('player_list/cancel', 'c_player_list@cancel');

// Route::get('player_list/del', 'c_player_list@del');
// Route::post('player_list/del', 'c_player_list@remove');

// Route::get('player_list/add', 'c_player_list@add');
// Route::post('player_list/add', 'c_player_list@create');

// Route::get('player_list/detail', 'c_player_list@detail');

// Route::get('player_list/all', 'c_player_list@all');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('player_list/auth', 'c_player_list@getAuth')->middleware('auth');

// Route::post('player_list/auth', 'c_player_list@postAuth');

// Route::get('player_list/logout', 'c_player_list@logout');

// Route::get('user/user_manage', 'c_user@user_list');

// Route::get('player_list/back', 'c_player_list@back');
// Route::post('player_list/back', 'c_player_list@reverse');

// Route::get('user/role_change', 'c_user@detail');
// Route::post('user/role_change', 'c_user@role_change');

// Route::get('user/cancel', 'c_user@cancel');

Route::post('player_list/movie', 'c_player_list@check_movie_pass');