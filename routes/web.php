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

/*Route::get('/', function () {
    return view('welcome');
    }); */

Route::name('home')->get('/home', function(){
    return view('home');  

});
Route::name('main')->get('/register', 'AuthController@register');
Route::name('register')->get('/register', 'AuthController@register');
Route::name('login')->get('/login', 'AuthController@login');
Route::name('signup')->post('/signup', 'AuthController@signup');
Route::name('signin')->post('/signin', 'AuthController@signin');
Route::name('logout')->get('/logout', 'AuthController@logout');

Route::prefix('admin')->group(function(){
    Route::name('vehicle')->get('/vehicle', 'AdminController@vehicle');
    Route::name('admin.request')->get('/request', 'AdminController@request');
    Route::name('addVehicle')->post('/add/vehicle', 'AdminController@addVehicle');
    Route::name('deleteVehicle')->get('/delete/vehicle/{v}', 'AdminController@deleteVehicle');
    Route::name('approve')->get('approve/vehicle/{request}', 'AdminController@approve');
    Route::name('reject')->get('reject/vehicle/{request}', 'AdminController@reject');
});
Route::prefix('user')->group(function(){
    Route::name('home')->get('/home', 'UserController@home');
    Route::name('rent')->get('/rent/vehicle/{v}', 'UserController@rent');
    Route::name('user.request')->get('/request', 'UserController@request');
});


  






