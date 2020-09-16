<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.beranda');
});

Auth::routes();

Auth::routes();

Route::get('/beranda','BerandaController@beranda')->name('beranda');
Route::get('/tentangkita','BerandaController@tentangkita')->name('tentangkita');

Route::get('/kabar','BerandaController@kabar')->name('kabar');
Route::get('/ceritayuk','BerandaController@ceritayuk')->name('ceritayuk');

Route::get('/kabar-news','BerandaController@kabarnews')->name('kabar-news');

Route::get('/admin','DashboardController@index');


Route::post('/ceritayuk','PintasController@aduan');

Route::post('/ceritayuk/tanyaiptek','TanyaiptekController@aduan');

Route::prefix('admin')
	->middleware(['auth','admin'])
	->group(function ()
	{
        
Route::get('pintas','PintasController@index');
Route::delete('/pintas/{id}/delete','PintasController@destroy')->name('pintas');
Route::get('/tanyaiptek','TanyaiptekController@index');
Route::delete('/tanyaiptek/{id}/delete','TanyaiptekController@destroy')->name('tanyaiptek');
Route::get('/kabar','KabarController@index');
Route::get('/kabar/{id}/show','KabarController@show');
Route::delete('/kabar/{id}/delete','KabarController@delete');
Route::get('/kabar/add','KabarController@add');
Route::post('/kabar/store','KabarController@store');
Route::get('/kabar/edit/{id}','KabarController@edit');
Route::put('/kabar/edit/{id}','KabarController@update');
	});