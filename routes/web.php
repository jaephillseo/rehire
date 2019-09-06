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
//     return view('welcome');
// });

Route::get('/','JobController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/jobs/{id}/{job}', 'JobController@show')->name('jobs.show');

//company link route
Route::get('/company/{id}/{company}', 'CompanyController@index')->name('company.index');

//user profile route
Route::get('user/profile','UserprofileController@index');
Route::post('user/profile/create','UserprofileController@store')->name('profile.create');
