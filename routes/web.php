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
Route::GET('map', 'JualController@barang');
Route::get('/kategori', function () {
    return view('kategori');
});
Route::resource('users' , 'User');
//table jual
Route::resource('jual', 'JualController');
Route::get('/upgrade', function () {
    return view('upgrade');
});
Route::get('foto/save/{id}',[
    'as' => 'foto.download', 'uses' => 'JualController@downloadFoto']);

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

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
  });
