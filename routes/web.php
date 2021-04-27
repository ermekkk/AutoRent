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
Auth::routes();
Route::get('logout','App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['
	middleware'=>'auth',
	//'namespace'=>'Admin',
	'prefix'=>'admin',
],
function(){
	Route::group(['middleware'=>'is_admin'],function(){
	Route::get('home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
	
	Route::resource('categories','App\Http\Controllers\Admin\CategoryController')->middleware('is_admin');
	Route::resource('orders','App\Http\Controllers\Admin\OrderController')->middleware('is_admin');
	Route::resource('brands','App\Http\Controllers\Admin\BrandController')->middleware('is_admin');
	Route::resource('products','App\Http\Controllers\Admin\ProductController')->middleware('is_admin');
	Route::resource('users','App\Http\Controllers\Admin\UserController')->middleware('is_admin');

});
});

Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::resource('orders','App\Http\Controllers\Admin\OrderController');
Route::get('/cars', 'App\Http\Controllers\MainController@cars')->name('cars');
Route::post('add/order/{product}', 'App\Http\Controllers\MainController@addOrder')->name('addOrder');

Route::get('/brands/{brand}', 'App\Http\Controllers\MainController@brand')->name('brand');


Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/categories/{category}', 'App\Http\Controllers\MainController@category')->name('category');

Route::get('/brands', 'App\Http\Controllers\MainController@brands')->name('brands');
Route::get('/{category}/{product}', 'App\Http\Controllers\MainController@product')->name('product');


Route::post('create/order/','App\Http\Controllers\InsertController@insert')->name('create');
Route::get('create/order/','App\Http\Controllers\InsertController@insert')->name('create');