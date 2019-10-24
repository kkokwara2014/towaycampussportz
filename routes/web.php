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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@index')->name('index');
Route::get('/services', 'PagesController@services');
Route::get('/team', 'PagesController@team');
Route::get('/project', 'PagesController@project');


Route::prefix('/about')->group(function () {
    Route::get('/the_founder', 'PagesController@thefounder');
    Route::get('/our_mission', 'PagesController@ourmission');
    Route::get('/our_vision', 'PagesController@ourvision');
    Route::get('/our_sponsors', 'PagesController@oursponsors');
    Route::get('/key_staff', 'PagesController@keystaff');
});

//for contact form
Route::get('/contact', 'PagesController@contact')->name('contactus');
Route::post('/send_messsage', 'ContactController@sendmessage')->name('send.message');

//User Authentication Routes...
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Admin Authentication Routes...
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
