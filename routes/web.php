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
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/tabel', function () {
    return view('tabel');
});
Route::get('/icons', function () {
    return view('icons');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/users', 'User@index')->name('user');
Route::resource('users' , 'User');
Route::resource('pengguna', 'Pengguna');
//table jual
Route::resource('jual', 'JualController');
Route::get('/upgrade', function () {
    return view('upgrade');
});
Route::get('foto/save/{id}',[
    'as' => 'foto.download', 'uses' => 'JualController@downloadFoto']);

//user
Route::get('/user', function () {
    return view('user');
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('post','PostController');
  Route::GET('tabel','PostController@tabel');
  Route::GET('kategori','PostController@kategori');
  Route::POST('addPost','PostController@addPost');
  Route::POST('editPost','PostController@editPost');
  Route::POST('deletePost','PostController@deletePost');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
