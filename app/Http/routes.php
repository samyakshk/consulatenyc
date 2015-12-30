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
Route::get('admin/categories','Categoriescontroller@index');
Route::get('admin/categories/create','Categoriescontroller@create');
Route::get('admin/categories/{id}','Categoriescontroller@show');
Route::post('admin/categories','Categoriescontroller@store');
Route::get('admin/categories/{id}/edit','CategoriesController@edit');
Route::patch('admin/categories/{id}/update','CategoriesController@update');
Route::get('admin/categories/{id}/delete','CategoriesController@destroy');

Route::get('admin/pages','PagesController@index');
Route::get('admin/pages/create','PagesController@create');
Route::get('admin/pages/{id}','PagesController@show');

Route::get('admin/pages/{id}/edit','PagesController@edit');
Route::patch('admin/pages/{id}/update','PagesController@update');



Route::get('admin/pages/{id}/delete','PagesController@destroy');
//Route::get('admin/pages/{id}/delete',function()

//{
//	return view('admin.pages.delete');
//}
//	);
Route::post('admin/pages','PagesController@store');

Route::get('front/page/{id}','publicpagecontroller@show');
Route::controllers([
   'password' => 'Auth\PasswordController',
]);