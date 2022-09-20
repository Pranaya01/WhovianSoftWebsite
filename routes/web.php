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

Route::get('/login', function () {
    return view('auth/login');
});

Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout');


Route::group([ 'middleware'=> ['admin'], ('verified')], function(){
    Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('admin/users', 'Admin\UserController');
    Route::get('usersearch', 'Admin\UserController@usersearch')->name('usersearch');
    
    Route::resource('admin/image-slider', 'Admin\ImageSliderController');

    Route::resource('admin/news', 'Admin\NewsController');
    Route::get('newsearch', 'Admin\NewsController@newsearch')->name('newsearch');

    Route::resource('admin/resources', 'Admin\ResourceController');


});
// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('', 'IndexController');
Route::get('about-us', 'AboutUsController@index')->name('index');
Route::resource('resource', 'ResourceController');
Route::get('faq', 'AboutUsController@faq')->name('faq');
Route::get('services', 'AboutUsController@services')->name('services');
Route::resource('article', 'UserNewsController');
Route::get('contact-us', 'ContactController@getContact')->name('getContact');
Route::post('contact-us', 'ContactController@saveContact')->name('saveContact');










