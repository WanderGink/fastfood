<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


get('/', 'PagesController@index');

get('/home', 'PagesController@index');



get('/fastfood', [
	'as' => 'fastfood.index',
	'uses' => 'FastfoodController@index'
]);



get('/fastfood/thong-tin-ca-nhan', [
	'middleware' => 'auth',
	'as' => 'fastfood.edit',
	'uses' => 'FastfoodController@edit'
]);

post('/fastfood/search', [
	'as' => 'fastfood.search',
	'uses' => 'FastfoodController@search'

]);

post('fastfood/create/{Pid}',[
	'as' => 'fastfood.store',
	'uses' => 'FastfoodController@store'
]);



get('/fastfood/thanh-toan/{sanpham}', [
	'as' => 'fastfood.thanhtoan',
	'uses' => 'FastfoodController@thanhtoan'
]);

get('/fastfood/don-hang', [
	'middleware' => 'auth',
	'as' => 'fastfood.donhang',
	'uses' => 'FastfoodController@donhang'
]);

delete('/fastfood/don-hang/{Did}',[
	'middleware' => 'auth',
	'as' => 'fastfood.destroy',
	'uses' => 'FastfoodController@destroy'
]);


get('/fastfood/chi-tiet-don-hang/{id}',[
	'middleware' => 'auth',
	'as' => 'fastfood.chitietdonhang',
	'uses' => 'FastfoodController@chitiet'
]);

put('/fastfood/{id}/cap-nhat-thanh-cong', [
	'middleware' => 'auth',
	'as' => 'fastfood.update',
	'uses' => 'FastfoodController@update'
]);

get('/fastfood/{category}', [
	'as' => 'fastfood.index',
	'uses' => 'FastfoodController@category'
]);

get('/fastfood/san-pham/{sanpham}', [
	'as' => 'fastfood.show',
	'uses' => 'FastfoodController@show'
]);

get('/fastfood/{category}/{sort}',[
	'as' => 'fastfood.method',
	'uses' => 'FastfoodController@sort'
]);

//Belong to Admin
get('/admin', [
    'as' => 'admin.manage_user',
    'uses' => 'AdminController@manageUser'
]);

get('/admin/login',[
	'as' => 'admin.login',
	'uses' => 'AdminController@login'
]);

get('/admin/logout', [
	'as' => 'admin.logout',
	'uses' => 'AdminController@logout'
]);

post('/admin/login/check', [
	'as' => 'admin.check',
	'uses' => 'AdminController@check'
]);

get('/admin/manage-admin',[
	'as' => 'admin.manage_admin',
	'uses' => 'AdminController@showAdmin'
]);

get('/admin/create-admin',[
	'as' => 'admin.creatAdmin',
	'uses' => 'AdminController@createAdmin'
]);

post('/admin/add-admin',[
	'as' => 'admin.addAdmin',
	'uses' => 'AdminController@store'
]);

get('/admin/delete-admin/{Aid}',[
	'as' => 'admin.deleteAdmin',
	'uses' => 'AdminController@deleteAdmin'
]);

get('/admin/manage-product', [
    'as' => 'admin.manage_product',
    'uses' => 'AdminController@manageProduct'
]);

get('/admin/manage-product/edit/{id}', [
    'as' => 'admin.edit_product',
    'uses' => 'AdminController@editProduct'
]);

put('/admin/manage-product/{Pid}', [
    'as' => 'admin.update_product',
    'uses' => 'AdminController@updateProduct'
]);

get('/admin/delete-user/{id}', [
    'as' => 'admin.deleteUser',
    'uses' => 'AdminController@deleteUser'
]);

get('/admin/manage-product/delete/{Pid}', [
    'as' => 'admin.deleteProduct',
    'uses' => 'AdminController@deleteProduct'
]);

get('/admin/add-product', [
    'as' => 'admin.add_product',
    'uses' => 'AdminController@showAddProduct'
]);

post('/admin/create-product',[
	'as' => 'admin.createProduct',
	'uses' => 'AdminController@addNewProduct'
]);

get('/admin/manage-cart/users-cart',[
	'as' => 'admin.userCart',
	'uses' =>  'AdminController@showUserCart'
]);

get('/admin/manage-cart/guests-cart', [
	'as' => 'admin.GuestCart',
	'uses' => 'AdminController@showGuestCart'
]);

delete('/admin/delete/don-hang/{Gid}',[
    'as' => 'admin.destroy',
    'uses' => 'AdminController@destroy'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
