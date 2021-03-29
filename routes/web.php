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

Route::get('/1', function () {
    return view('welcome');
});

Route::get('/', 'AccueilController@index')->name('accueil');

Route::get('/espace', 'ReservationController@membre')->name('reserve');

Route::post('/inscription', 'UserController@user_store')->name('user.store');

Route::get('/redirecte', 'UserController@apres_inscription')->name('accuse');

Route::get('/admin', 'UserController@dashboard')->name('admin');

Route::get('/reservation', 'ReservationController@espace_reservation')->name('reservation');

Route::get('/user_list', 'UserController@users_valid')->name('user.list');

Route::get('/user_invalid', 'UserController@users_invalid')->name('user.invalid');

//validations inscrits

Route::get('/validate-inscrit/{id}', 'UserController@validate_inscrit')->name('inscrit.validate');
Route::get('/rejet-inscrit/{id}', 'UserController@rejet_inscrit')->name('inscrit.rejet');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');