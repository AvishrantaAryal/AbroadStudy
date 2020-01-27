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

Route::get('/','FrontendController@home') ;
    

Route::get('home','FrontendController@home');


Route::get('pagenotfound',['as' => 'notfound','uses' => 'FrontendController@pagenotfound']);




Route::get('company-profile','FrontendController@companyprofile');

Route::get('message-from-ceo','FrontendController@message');

Route::get('our-team','FrontendController@team'); 
 

Route::get('service','FrontendController@service');

Route::get('service-detail/{id}','FrontendController@servicedetails');
   

Route::get('study-abroad-dynamic/{id}','FrontendController@studyabroad');

Route::get('testimonial','FrontendController@testimonial');

Route::get('album','FrontendController@album');

Route::get('gallery/{id}','FrontendController@gallery');

Route::get('class-dynamic/{title}','FrontendController@classdetails');

Route::get('contact', 'FrontendController@contact');
Route::post('/storecontact','ContactController@store');


Auth::routes(['register' => false]);
Route::get('/admin', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {

Route::get('logout','DashboardController@logout')->name('logout');
Route::get('/admin','DashboardController@dashboard');
Route::get('cd-admin','DashboardController@home'); 
Route::post('/quickmail','DashboardController@quickmail');
Route::get('view-all-mails','DashboardController@view');

Route::get('/deletemail/{id}','DashboardController@del');

Route::get('/view-all-admin','AdminController@adminshow');
Route::get('/addadmin','AdminController@add');
Route::post('/storeadmin','AdminController@storeadmin');
Route::get('/deleteadmin/{id}','AdminController@delete');

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


//CEo Message
Route::get('/ceomessage-add','CeoController@add');
Route::post('/ceomessagestore','CeoController@store');
Route::get('/ceomessage-view','CeoController@view');
Route::post('/updateceomessage','CeoController@updateceo');
Route::get('/editceomessage','CeoController@edit');

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
Route::get('/editclass/{id}','ClassController@edit');
Route::get('class-view','ClassController@view');
Route::post('/classupdate/{id}','ClassController@updateclass');
Route::get('/classdetail/{id}','classController@detail');
Route::get('/deleteclass/{id}','classController@delete');
Route::post('/classstatus/{id}','classController@statusupdate');


//Gallery
Route::get('/album-add','GalleryController@add');
Route::post('/storealbum','GalleryController@store');
Route::get('/album-view','GalleryController@view');
Route::post('/statusal/{id}','GalleryController@status');
Route::get('deletealbum/{id}','GalleryController@deletealbum');
Route::get('deleteimage/{id}','GalleryController@deleteimage');
Route::get('/image-add/{id}','GalleryController@addimage');
Route::post('/imagestore/{id}','GalleryController@storeimage');
Route::get('/image-view/{id}','GalleryController@image');

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

Route::post('/storereply/{id}','ContactController@storereply');
Route::get('/deleteinbox/{id}','ContactController@deleteinbox');
Route::get('/deletereply/{id}','ContactController@deletereply');


//Team
Route::get('/team-add','TeamController@add');
Route::post('/storeteam','TeamController@store');
Route::get('/team-view','TeamController@view');
Route::get('/editteam/{id}','TeamController@edit');
Route::post('/updateteam/{id}','TeamController@update');
Route::post('/teamstatus/{id}','TeamController@statusupdate');
Route::get('/deleteteam/{id}','TeamController@deleteteam');


//SEO
Route::get('/seo-add','SEOController@add');
Route::get('/seo-view','SEOController@view');
Route::post('/seostore','SEOController@store');
Route::get('/editseo/{id}','SEOController@edit');
Route::post('/updateseo/{id}','SEOController@updateseo');
Route::get('/deleteseo/{id}','SEOController@delete');

});