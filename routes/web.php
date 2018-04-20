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

Route::get('/', 'MainController@index');

Route::get('/dashboard', 'QuatessController@dashboard');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//Registration Routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Password Reset
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//Custom login Controllers Here
 Route::resource('account', 'LoginController');
 Route::resource('role', 'RoleController');
 Route::resource('portfolio', 'PortfolioController');
 Route::get('portfolios/{slug}', ['as' => 'quatess.single-portfolio', 'uses' => 'MainController@getSinglePortfolio'])->where('slug', '[\w\d\-\_]+');
 Route::resource('blog', 'BlogController');
 Route::get('blogs/{slug}', ['as' => 'quatess.single-blog', 'uses' => 'MainController@getSingleBlog'])->where('slug', '[\w\d\-\_]+');
 Route::resource('project', 'ProjectController');
 Route::get('projects/{slug}', ['as' => 'quatess.single-project', 'uses' => 'MainController@getSingleProject'])->where('slug', '[\w\d\-\_]+');
 Route::resource('service', 'ServiceController');
 Route::resource('client', 'ClientController');
 Route::resource('setting', 'SettingController');
 // Below Reading Individual Service Using the Slug Inserted
 Route::get('services/{slug}', ['as' => 'quatess.single-service', 'uses' => 'MainController@getSingleServices'])->where('slug', '[\w\d\-\_]+');
 Route::resource('team', 'TeamController');
 Route::resource('page', 'PageController');
 Route::resource('support', 'SupportController');
//From Here We star having the other sub-pages below
 Route::get('/about','MainController@about');
 Route::get('/projects','MainController@projects');
 Route::get('/services','MainController@services');
 Route::get('/portfolios','MainController@portfolios');
 Route::get('/blogs','MainController@blogs');
 Route::get('/contact', 'MainController@contact');
 Route::post('contact', 'MainController@postContact');
 
Route::get('/home', 'HomeController@index')->name('home');
