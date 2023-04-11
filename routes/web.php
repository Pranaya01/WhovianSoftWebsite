<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/login', function () {
    return view('auth/login');
});

Auth::routes(['verify' => false]);
Route::get('/logout', 'Auth\LoginController@logout');


Route::group([ 'middleware'=> ['admin'], ('verified')], function(){
    Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('admin/users', 'Admin\UserController');
    Route::get('usersearch', 'Admin\UserController@usersearch')->name('usersearch');   
    Route::resource('admin/image-slider', 'Admin\ImageSliderController');
    Route::resource('admin/resources', 'Admin\ResourceController');
    Route::resource('admin/resource-slider', 'Admin\ResourceSliderController');
    Route::resource('admin/news', 'Admin\NewsController');
    Route::get('newsearch', 'Admin\NewsController@newsearch')->name('newsearch');
    // Route::get('/home', 'HomeController@index')->name('home');


});


Route::resource('', 'IndexController');
Route::post('/subscribe', 'IndexController@subscribe')->name('subscribe');
Route::get('about-us', 'AboutUsController@aboutus')->name('aboutus');
Route::get('partnership-model', 'AboutUsController@partnership_model')->name('partnership_model');
Route::get('amazon-services', 'AboutUsController@amazon_services')->name('amazon_services');
Route::get('catalogmanagement', 'AboutUsController@catalogmanagement')->name('catalogmanagement');
Route::get('itstaffing', 'AboutUsController@itstaffing')->name('itstaffing');
Route::get('ecommerce-service', 'AboutUsController@ecommerce')->name('ecommerce');
Route::get('marketplace-service', 'AboutUsController@marketplace')->name('marketplace');
Route::get('webdesign-service', 'AboutUsController@webdesign')->name('webdesign');
Route::get('seo-service', 'AboutUsController@seoservice')->name('seoservice');




Route::resource('article', 'UserNewsController');
Route::resource('contact', 'ContactUsController');


// Route::get('contact', 'ContactController@sendEmail')->name('sendEmail');
// Route::post('contact', 'ContactController@create')->name('create');








