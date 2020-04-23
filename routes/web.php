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
    return view('welcome');
});

//admin
route::get('/login','AdminController@login');
route::get('/dashboard','AdminController@show_dashboard');
route::post('/admin_login','AdminController@admin_login');
route::get('/logout','AdminController@logout');

// admin tour
route::get('all-tour','TourTravelController@all_tour');
route::get('add-tour','TourTravelController@add_tour');