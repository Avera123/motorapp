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
//web
Route::redirect('/', 'InterClubes');

Auth::routes();

Route::get('InterClubes', 'Web\pageController@InterClubes')->name('InterClubes');

Route::get('InterClubes/{slug}', 'Web\pageController@description')->name('description');

Route::get('CuponesPorMarca/{slug}', 'Web\pageController@couponsBrand')->name('couponsBrand');

Route::get('Cupones', 'Web\pageController@Coupons')->name('Coupons');

Route::get('Cupones/{id}', 'Web\pageController@descriptionCoupon')->name('descriptionCoupon');


//Admin
Route::middleware(['auth'])->group(function () {
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');
	//Users
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');
	//Brands
	Route::post('brands/store', 'BrandController@store')->name('brands.store')
		->middleware('permission:brands.create');

	Route::get('brands', 'BrandController@index')->name('brands.index')
		->middleware('permission:brands.index');

	Route::get('brands/create', 'BrandController@create')->name('brands.create')
		->middleware('permission:brands.create');

	Route::put('brands/{brand}', 'BrandController@update')->name('brands.update')
		->middleware('permission:brands.edit');

	Route::get('brands/{brand}', 'BrandController@show')->name('brands.show')
		->middleware('permission:brands.show');

	Route::delete('brands/{brand}', 'BrandController@destroy')->name('brands.destroy')
		->middleware('permission:brands.destroy');

	Route::get('brands/{brand}/edit', 'BrandController@edit')->name('brands.edit')
		->middleware('permission:brands.edit');
	//Coupons
	Route::post('coupons/store', 'CouponController@store')->name('coupons.store')
		->middleware('permission:coupons.create');

	Route::get('coupons', 'CouponController@index')->name('coupons.index')
		->middleware('permission:coupons.index');

	Route::get('coupons/create', 'CouponController@create')->name('coupons.create')
		->middleware('permission:coupons.create');

	Route::put('coupons/{coupon}', 'CouponController@update')->name('coupons.update')
		->middleware('permission:coupons.edit');

	Route::get('coupons/{coupon}', 'CouponController@show')->name('coupons.show')
		->middleware('permission:coupons.show');

	Route::delete('coupons/{coupon}', 'CouponController@destroy')->name('coupons.destroy')
		->middleware('permission:coupons.destroy');

	Route::get('coupons/{coupon}/edit', 'CouponController@edit')->name('coupons.edit')
		->middleware('permission:coupons.edit');
});