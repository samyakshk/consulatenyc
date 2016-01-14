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

Route::get('/', function () {
    return view('/front/home');
});

// Authentication routes...
Route::get('auth/login',['as'=>'login','uses' =>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as'=>'logout','uses' =>'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register',['as'=>'register','uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/admin',['middleware'=>'auth',function(){
return view('admin.index');



}]);

Route::get('front/contact',function(){
return view('front.contactpage');


});

//Routes for categories


Route::get('admin/categories','Categoriescontroller@index');
Route::get('admin/categories/create','Categoriescontroller@create');
Route::get('admin/categories/{id}','Categoriescontroller@show');
Route::post('admin/categories','Categoriescontroller@store');
Route::get('admin/categories/{id}/edit','CategoriesController@edit');
Route::patch('admin/categories/{id}/update','CategoriesController@update');
Route::get('admin/categories/{id}/delete','CategoriesController@destroy');

//Routes for pages


Route::get('admin/pages','PagesController@index');
Route::get('admin/pages/create','PagesController@create');
Route::get('admin/pages/{id}','PagesController@show');
Route::get('admin/pages/{id}/edit','PagesController@edit');
Route::patch('admin/pages/{id}/update','PagesController@update');
Route::get('admin/pages/{id}/delete','PagesController@destroy');
 Route::post('admin/pages','PagesController@store');



//Route::get('admin/pages/{id}/delete',function()

//{
//	return view('admin.pages.delete');
//}
//	);

Route::get('front/category/{id}','menucontroller@show');
Route::get('front/page/{id}','publicpagecontroller@show');


//Routes for passport

Route::get('admin/passport','PassportController@index');
Route::get('admin/passport/create','PassportController@create');
Route::get('admin/passport/{id}','PassportController@show');
Route::get('admin/passport/{id}/edit','PassportController@edit');
Route::patch('admin/passport/{id}/update','PassportController@update');
Route::get('admin/passport/{id}/delete','PassportController@destroy');
 
 Route::post('admin/passport','PassportController@store');

// Routes for Status
Route::get('admin/status','StatusController@index');

Route::get('admin/status/create','StatusController@create');
Route::get('admin/status/{id}','StatusController@show');
Route::get('admin/status/{id}/edit','StatusController@edit');

Route::patch('admin/status/{id}/update','StatusController@update');
Route::get('admin/status/{id}/delete','StatusController@destroy');
 
 Route::post('admin/status','StatusController@store');

Route::get('admin/passportstatus','PassportStatusController@index');
Route::get('admin/passportstatus/create','PassportStatusController@create');
Route::get('admin/passportstatus/{id}','PassportStatusController@show');
Route::get('admin/passportstatus/{id}/edit','PassportStatusController@edit');
 Route::post('admin/passportstatus','PassportStatusController@store');
Route::patch('admin/passportstatus/{id}/update','PassportStatusController@update');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);