<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'homeController@index');

Route::get('/show_book/{id}', 'BookController@show_book');

Route::get('/profile/{id}', 'ProfileController@show_profile');

Route::get('/search', 'homeController@search');

Route::post('/add_books', 'BookController@add_book');

Route::get('/account_settings', function () {
    return view('account_settings');
});
Route::post('/account_settings/edit', 'ProfileController@edit');
Route::post('/account_settings/password', 'ProfileController@editpassword');
Route::get('/add_book', function () {
    return view('add_book');
});
Route::get('/edit_book/{id}', 'BookController@edit_book');
Route::get('/account_settings/{id}', 'ProfileController@changePassword');

Route::get('/massages', function () {
    return view('massages2');
});
Route::get('/admin', 'admin\indexController@index');

Route::get('/admin/login', function () {
    return view('admin/login');
});
Route::post('/verifylogin', 'admin\loginController@index');
Route::get('/all_books', 'admin\indexController@books');
Route::get('/sold_books', function () {
    return view('admin/sold_books');
});
Route::get('/users', function () {
    return view('admin/users');
});
Route::get('/verify', function () {
    return view('auth/verify');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
