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

Route::get('/teste', function () {
    return '<html><body>Aula de Laravel</body></html>';
});

Route::get('/123', function () {
    return '<html><body>123------</body></html>';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// permite acesso das páginas dentro deste grupo abaixo somente se o usuário estiver logado
Route::group(['middleware' => ['auth']], function () {
    Route::resource('message', 'MessageController');
});