<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index');
Route::get('/menu', 'HomeController@menu');
Route::get('/cart', 'HomeController@cart');


Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/logout', 'AdminController@logout');
    //food menu routes
    Route::get('/admin/food_menu/list/{type?}', 'FoodMenuController@index')->name('food_list');
    Route::get('/admin/food_menu/new', 'FoodMenuController@new');
    Route::post('/admin/food_menu/create', 'FoodMenuController@create');
    Route::post('/admin/food_menu/update/{id}', 'FoodMenuController@update');
    Route::get('/admin/food_menu/delete', 'FoodMenuController@delete');
    Route::get('/admin/food_menu/show/{id}', 'FoodMenuController@show');
    Route::get('/admin/food_menu/status', 'FoodMenuController@itemStatus');
    Route::get('/admin/food_menu/activate/{id}', 'FoodMenuController@activate');
    Route::get('/admin/food_menu/deactivate/{id}', 'FoodMenuController@deactivate');
    Route::get('/admin/food_menu/highlight/{id}', 'FoodMenuController@highlight');
    Route::get('/admin/food_menu/unhighlight/{id}', 'FoodMenuController@unhighlight');
    
    //orders routes
    Route::get('/admin/order/list/{type}', 'OrderController@index');
    Route::get('/admin/order/accept/{id}', 'OrderController@accept');
    Route::get('/admin/order/complete/{id}', 'OrderController@complete');
    Route::get('/admin/order/show/{id}', 'OrderController@show');

    //customer routes
    Route::get('/admin/customer/index', 'CustomerController@index');

    //payment routes
    Route::get('/admin/payment/index', 'PaymentController@index');
    
});


