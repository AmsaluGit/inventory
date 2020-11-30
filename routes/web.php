<?php

  

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\HomeController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CountriesController;

  

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

  

Auth::routes();

  

Route::get('/home', [HomeController::class, 'index'])->name('home');

  

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);

    Route::resource('products', ProductController::class);

});
 
Route::resource('countries', CountriesController::class);
/*
Route::group([
    'prefix' => 'countries',
], function () {
    Route::get('/', 'CountriesController@index')
         ->name('countries.country.index');
    Route::get('/create','CountriesController@create')
         ->name('countries.country.create');
    Route::get('/show/{country}','CountriesController@show')
         ->name('countries.country.show')->where('id', '[0-9]+');
    Route::get('/{country}/edit','CountriesController@edit')
         ->name('countries.country.edit')->where('id', '[0-9]+');
    Route::post('/', 'CountriesController@store')
         ->name('countries.country.store');
    Route::put('country/{country}', 'CountriesController@update')
         ->name('countries.country.update')->where('id', '[0-9]+');
    Route::delete('/country/{country}','CountriesController@destroy')
         ->name('countries.country.destroy')->where('id', '[0-9]+');
});*/
