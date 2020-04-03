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

Auth::Routes();
Route::get('/','HomeController@home')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/blogs','HomeController@blogs')->name('blogs');
Route::get('/courses','HomeController@courses')->name('courses');
Route::get('/terms','HomeController@TermsConditions')->name('TermsConditions');
Route::get('/privcy','HomeController@PrivcyPolicy')->name('PrivcyPolicy');
Route::get('/faqs','HomeController@FAQS')->name('FAQS');