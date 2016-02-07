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

Route::get('/front/orgstruc', function () {
    return view('/front/orgstruc');
});
Route::get('/front/DipVisa', function () {
    return view('/front/DipVisa');
});
Route::get('/front/Tvisa', function () {
    return view('/front/Tvisa');
});
Route::get('/front/OffVisa', function () {
    return view('/front/offVisa');
});
Route::get('/front/POA', function () {
    return view('/front/POA');
});
Route::get('/front/Attestation', function () {
    return view('/front/Attestation');
});
Route::get('/front/NRNID', function () {
    return view('/front/NRNID');
});
Route::get('/front/tourism', function () {
    return view('/front/tourism');
});
Route::get('/front/trade', function () {
    return view('/front/trade');
});
Route::get('/front/investment', function () {
    return view('/front/investment');
});
Route::get('/front/press', function () {
    return view('/front/press');
});
Route::get('/front/holiday', function () {
    return view('/front/holiday');
});
Route::get('/front/notice', function () {
    return view('/front/notice');
});

Route::get('/front/consular', function () {
    return view('/front/consular');
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


Route::get('admin/Homepage','homeController@index');
Route::get('admin/Homepage/create','homeController@create');
Route::get('admin/Homepage/{id}','homeController@show');
Route::post('admin/Homepage','homeController@store');
Route::get('admin/Homepage/{id}/edit','homeController@edit');
Route::patch('admin/Homepage/{id}/update','homeController@update');
Route::get('admin/Homepage/{id}/delete','homeController@destroy');



//Routes for pages

Route::get('admin/pages','PagesController@index');
Route::get('admin/pages/{id}','PagesController@show');
 Route::post('admin/pages','PagesController@store');
Route::get('admin/pages/{id}/edit','PagesController@edit');
Route::patch('admin/pages/{id}/update','PagesController@update');
Route::get('admin/pages/{id}/delete','PagesController@destroy');





//Route::get('front/category/{id}','menucontroller@show');
Route::get('front/page/{id}','publicpagecontroller@show');


//Routes for passport

Route::get('admin/passport','PassportController@index');
Route::get('admin/passport/create','PassportController@create');
Route::get('admin/passport/{id}','PassportController@show');
Route::get('admin/passport/{id}/edit','PassportController@edit');
Route::patch('admin/passport/{id}/update','PassportController@update');
Route::get('admin/passport/{id}/delete','PassportController@destroy');
 Route::post('admin/passport','PassportController@store');


Route::resource('passport','PassportController');

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
Route::get('admin/passportstatus/{id}/delete','PassportStatusController@destroy');
//Route attestation
Route::get('admin/attestation','AttestationController@index');
Route::get('admin/attestation/create','AttestationController@create');
Route::get('admin/attestation/{id}','AttestationController@show');
Route::get('admin/attestation/{id}/edit','AttestationController@edit');
 Route::post('admin/attestation','AttestationController@store');
Route::patch('admin/attestation/{id}/update','AttestationController@update');
Route::get('admin/attestation/{id}/delete','AttestationController@destroy');
//Route ConcularGeneral
Route::get('admin/consulargeneral','ConsulargenController@index');
Route::get('admin/consulargeneral/create','ConsulargenController@create');
Route::get('admin/consulargeneral/{id}','ConsulargenController@show');
Route::get('admin/consulargeneral/{id}/edit','ConsulargenController@edit');
 Route::post('admin/consulargeneral','ConsulargenController@store');
Route::patch('admin/consulargeneral/{id}/update','ConsulargenController@update');
Route::get('admin/consulargeneral/{id}/delete','ConsulargenController@destroy');
//Route DipVisa

Route::get('admin/diplomacyvisa','DipVisaController@index');
Route::get('admin/diplomacyvisa/create','DipVisaController@create');
Route::get('admin/diplomacyvisa/{id}','DipVisaController@show');
Route::get('admin/diplomacyvisa/{id}/edit','DipVisaController@edit');
 Route::post('admin/diplomacyvisa','DipVisaController@store');
Route::patch('admin/diplomacyvisa/{id}/update','DipVisaController@update');
Route::get('admin/diplomacyvisa/{id}/delete','DipVisaController@destroy');
//Route Holiday

Route::get('admin/holiday','HolidayController@index');
Route::get('admin/holiday/create','HolidayController@create');
Route::get('admin/holiday/{id}','HolidayController@show');
Route::get('admin/holiday/{id}/edit','HolidayController@edit');
 Route::post('admin/holiday','HolidayController@store');
Route::patch('admin/holiday/{id}/update','HolidayController@update');
Route::get('admin/holiday/{id}/delete','HolidayController@destroy');
//Route Investment


Route::get('admin/investment','InvestController@index');
Route::get('admin/investment/create','InvestController@create');
Route::get('admin/investment/{id}','InvestController@show');
Route::get('admin/investment/{id}/edit','InvestController@edit');
 Route::post('admin/investment','InvestController@store');
Route::patch('admin/investment/{id}/update','InvestController@update');
Route::get('admin/investment/{id}/delete','InvestController@destroy');
//Route Notice

Route::get('admin/notice','NoticeController@index');
Route::get('admin/notice/create','NoticeController@create');
Route::get('admin/notice/{id}','NoticeController@show');
Route::get('admin/notice/{id}/edit','NoticeController@edit');
 Route::post('admin/notice','NoticeController@store');
Route::patch('admin/notice/{id}/update','NoticeController@update');
Route::get('admin/notice/{id}/delete','NoticeController@destroy');
//Route NRNID


Route::get('admin/nrnid','NRNIDController@index');
Route::get('admin/nrnid/create','NRNIDController@create');
Route::get('admin/nrnid/{id}','NRNIDController@show');
Route::get('admin/nrnid/{id}/edit','NRNIDController@edit');
 Route::post('admin/nrnid','NRNIDController@store');
Route::patch('admin/nrnid/{id}/update','NRNIDController@update');
Route::get('admin/nrnid/{id}/delete','NRNIDController@destroy');
//Route Offvisa


Route::get('admin/officialvisa','OffVisaController@index');
Route::get('admin/officialvisa/create','OffVisaController@create');
Route::get('admin/officialvisa/{id}','OffVisaController@show');
Route::get('admin/officialvisa/{id}/edit','OffVisaController@edit');
 Route::post('admin/officialvisa','OffVisaController@store');
Route::patch('admin/officialvisa/{id}/update','OffVisaController@update');
Route::get('admin/officialvisa/{id}/delete','OffVisaController@destroy');
//Route Organisation structure

Route::get('admin/orgstruc','OrgStrucController@index');
Route::get('admin/orgstruc/create','OrgStrucController@create');
Route::get('admin/orgstruc/{id}','OrgStrucController@show');
Route::get('admin/orgstruc/{id}/edit','OrgStrucController@edit');
 Route::post('admin/orgstruc','OrgStrucController@store');
Route::patch('admin/orgstruc/{id}/update','OrgStrucController@update');
Route::get('admin/orgstruc/{id}/delete','OrgStrucController@destroy');
//Route Power of Attorney


Route::get('admin/powerofattorney','POAController@index');
Route::get('admin/powerofattorney/create','POAController@create');
Route::get('admin/powerofattorney/{id}','POAController@show');
Route::get('admin/powerofattorney/{id}/edit','POAController@edit');
 Route::post('admin/powerofattorney','POAController@store');
Route::patch('admin/powerofattorney/{id}/update','POAController@update');
Route::get('admin/powerofattorney/{id}/delete','POAController@destroy');
//Route Press Releases

Route::get('admin/press','PressController@index');
Route::get('admin/press/create','PressController@create');
Route::get('admin/press/{id}','PressController@show');
Route::get('admin/press/{id}/edit','PressController@edit');
 Route::post('admin/press','PressController@store');
Route::patch('admin/press/{id}/update','PressController@update');
Route::get('admin/press/{id}/delete','PressController@destroy');
//Route  tourism


Route::get('admin/tourism','TourismController@index');
Route::get('admin/tourism/create','TourismController@create');
Route::get('admin/tourism/{id}','TourismController@show');
Route::get('admin/tourism/{id}/edit','TourismController@edit');
 Route::post('admin/tourism','TourismController@store');
Route::patch('admin/tourism/{id}/update','TourismController@update');
Route::get('admin/tourism/{id}/delete','TourismController@destroy');

//Route touristvisa


Route::get('admin/touristvisa','TouristVisaController@index');
Route::get('admin/touristvisa/create','TouristVisaController@create');
Route::get('admin/touristvisa/{id}','TouristVisaController@show');
Route::get('admin/touristvisa/{id}/edit','TouristVisaController@edit');
 Route::post('admin/touristvisa','TouristVisaController@store');
Route::patch('admin/touristvisa/{id}/update','TouristVisaController@update');
Route::get('admin/touristvisa/{id}/delete','TouristVisaController@destroy');
//Route trade


Route::get('admin/trade','TradeController@index');
Route::get('admin/trade/create','TradeController@create');
Route::get('admin/trade/{id}','TradeController@show');
Route::get('admin/trade/{id}/edit','TradeController@edit');
 Route::post('admin/trade','TradeController@store');
Route::patch('admin/trade/{id}/update','TradeController@update');
Route::get('admin/trade/{id}/delete','TradeController@destroy');

Route::get('/admin/gallery', array('as' => 'index','uses' => 'AlbumsController@getList'));
Route::get('/admin/gallery/createalbum', array('as' => 'create_album_form','uses' => 'AlbumsController@getForm'));
Route::post('/admin/gallery/createalbum', array('as' => 'create_album','uses' => 'AlbumsController@postCreate'));
Route::get('/admin/gallery/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@getDelete'));
Route::get('/admin/gallery/album/{id}', array('as' => 'show_album','uses' => 'AlbumsController@getAlbum'));
Route::get('/admin/gallery/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
Route::post('/admin/gallery/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
Route::get('/admin/gallery/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));


Route::controllers([
   'password' => 'Auth\PasswordController',
]);