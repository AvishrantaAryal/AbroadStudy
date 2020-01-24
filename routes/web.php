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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {

Route::get('/admin','DashboardController@dashboard');
Route::get('cd-admin','DashboardController@home'); 
Route::post('/quickmail','DashboardController@quickmail');
Route::get('view-all-mails','DashboardController@view');
Route::get('view-all-admin','DashboardController@adminview');
Route::get('/deletemail/{id}','DashboardController@del');


//CAROUSEL
Route::get('/carousel-add','CarouselController@addcarousel');
Route::get('/carousel-view','CarouselController@viewcarousel');
Route::post('/storecarousel','CarouselController@store');
Route::post('/statuscar/{id}','CarouselController@statusupdate');
Route::get('/deletecar/{id}','CarouselController@delete');


//About
Route::get('/abouts-add','AboutController@add');
Route::post('/aboutstore','AboutController@store');
Route::get('/abouts-view','AboutController@view');
Route::post('/updateabout','AboutController@updateabout');


//Study Destination
Route::get('/study-add','StudyController@add');
Route::post('/storestudy','StudyController@store');
Route::get('/study-view','StudyController@view');
Route::get('/studydetail/{id}','StudyController@detail');
Route::get('/editstudy/{id}','StudyController@edit');
Route::post('/studyupdate/{id}','StudyController@updatestudy');
Route::get('/deletestudy/{id}','StudyController@delete');
Route::post('/studystatus/{id}','StudyController@statusupdate');

//Service
Route::get('/service-add','ServiceController@addservice');
Route::post('/storeservices','ServiceController@store');
Route::get('/editservice/{id}','ServiceController@edit');
Route::get('/service-view','ServiceController@view');
Route::post('/serviceupdate/{id}','ServiceController@updateservice');
Route::post('/servicestatus/{id}','ServiceController@statusupdate');
Route::get('/deleteservices/{id}','ServiceController@delete');


//CLASS
Route::get('/class-add','ClassController@add');
Route::post('/storeclass','ClassController@store');


//Testimonial
Route::get('/testimonial-add','TestimonialController@add');
Route::post('/testimonial-store','TestimonialController@store');
Route::get('/edittestimonial/{id}','TestimonialController@edit');
Route::get('/testimonials-view','TestimonialController@view');
Route::post('/updatetestimonial/{id}','TestimonialController@update');
Route::post('/testimonialstatus/{id}','TestimonialController@statusupdate');
Route::get('/deletetestimonial/{id}','TestimonialController@deletetestimonial');

//Contact
Route::get('/createcontact','ContactController@addcontact');
Route::get('/viewcontact','ContactController@contact');
Route::get('/replies','ContactController@reply');
Route::get('/replycontact/{id}','ContactController@replyform');
Route::post('/storecontact','ContactController@store');
Route::post('/storereply/{id}','ContactController@storereply');
Route::get('/deleteinbox/{id}','ContactController@deleteinbox');
Route::get('/deletereply/{id}','ContactController@deletereply');

});