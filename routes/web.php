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

Route::get('/', function () {
    $schoolAddress = \App\School::all();
    return view('welcome')->with("schoolAddress",$schoolAddress);
});
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister')->name("post-register");
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');
Route::get('about-us', 'AboutUs@index')->name("about-us");
Route::get('search', 'Search@index')->name("search");
//Route::get('school-admin', 'Admin@index')->name("school-admin");
Route::get('school', 'SchoolController@index')->name("school");
Route::resource("school","SchoolController");
Route::get("school-admin-index","SchoolAdminController@index")->name('school-admin-index');
Route::resource("school-admin","SchoolAdminController");
Route::get('school-settings', 'SchoolSettings@index')->name("school-settings");
Route::get('user', 'UserController@index')->name("user");
Route::get('user-settings', 'UserSettings@index')->name("user-settings");
Route::post('change-password', 'UserSettings@changePassword')->name("change-password");

//Route::resource('user', 'UserController@index');
//Route::resource('user-settings', 'UserSettings@index');

Route::resource("news","NewsController");
Route::get("news-form","NewsController@create")->name("news-form");
Route::post("news-register","NewsController@store")->name("news-register");

Route::get("view-details","Search@viewDetails")->name("view-details");


Route::get('register-user', 'UserController@create')->name("register-user");

Route::post('register-user', 'UserController@store')->name("register-user");

Route::resource("class","ClassesController");
Route::get("school-details/{id}","SchoolController@schoolDetails")->name("school-details");

Route::get("reserve-class/{id}/school/{schoolId}","ClassesController@reserveClass")->name("reserve-class");


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

