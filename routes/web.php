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
    return redirect()->route('jadual.index');
})->name('home');;

// Route::resource('/jadual', 'JadualTilawahController');
Route::get('/jadual', 'JadualTilawahController@index')->name('jadual.index');
Route::get('/jadual/{idGroup}', 'JadualTilawahController@show')->name('jadual.show');
Route::get('/jadual/{idGroup}/tambahJuzu', 'JadualTilawahController@tambahJuzu')->name('jadual.tambahJuzu');
Route::get('/jadual/{idGroup}/tolakJuzu', 'JadualTilawahController@tolakJuzu')->name('jadual.tolakJuzu');
Route::get('/jadual/{idGroup}/resetJuzu', 'JadualTilawahController@resetJuzu')->name('jadual.resetJuzu');

Route::resource('/group', 'GroupController');
Route::resource('/member', 'MemberController');
