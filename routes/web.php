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

use BeginingLaravel\Http\Middleware\CheckFirstName;

Route::get('/', function () {
    return view('welcome');
});

Route::get('testroute', 'testController@index');

Route::get('form', function () {
    return view('form');
});
Route::post('formsubmit', function () {
    return "Form Posted";
})->middleware(CheckFirstName::class);

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('user/{name}', function($name){
    echo "Name is " . $name;
})->where('name', '[A-Za-z]+');

Route::get('userList', 'UserController@read');

Route::resource('departement', 'DepartementController');

Route::get('createUser', 'UserController@create');
Route::get('updateUser/{id}', 'UserController@update');
Route::get('deleteUser/{id}', 'UserController@delete');

Route::resource('employee', 'EmployeeController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
