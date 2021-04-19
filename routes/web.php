<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('homepage');

Auth::routes();

//Home
Route::group(['namespace' => 'App\Http\Controllers', 'Middleware' => 'auth'], function () {
    Route::get("dashboard","HomeController@index") -> name('dashboard');
    Route::get("change/password","HomeController@setting") -> name('setting');
    Route::put("change-password","HomeController@password") -> name('setting.password');
    
});
 
//User
Route::group(['prefix' => 'user','namespace' => 'App\Http\Controllers', 'middleware'=>'auth'], function () {
    Route::get('profile','ProfileController@index')->name('profile.index');
    Route::put('edit','ProfileController@edit')->name('profile.edit');
    Route::post('delete','ProfileController@delete')->name('profile.delete'); 
    
});
 
//Users
Route::group(['prefix' => 'users','namespace' => 'App\Http\Controllers', 'middleware'=>'userrolecheck'], function () {

    Route::get('all','ProfileController@all')->name('user.all');
    Route::get('delete/{id}','ProfileController@allUsersDelete')->name('user.delete');
    Route::get('edit/{id}','ProfileController@userEdit')->name('user.edit');
    Route::put('update','ProfileController@userUpdate')->name('user.update');
    
});

 //Timesheets
Route::group(['prefix' => 'Timesheets','namespace' => 'App\Http\Controllers', 'middleware'=>'auth'], function () {
    Route::post('store','TimecardController@store')->name('timecard.store');
    Route::get('index','TimecardController@index')->name('timecard.index');
    Route::get('delete/{id}','TimecardController@delete')->name('timecard.delete');
    Route::get('view/{id}','TimecardController@view')->name('timecard.view');
});
 
//setting
Route::group(['prefix' => 'setting','namespace' => 'App\Http\Controllers', 'middleware'=>'userrolecheck'], function () {
    Route::get('logo','SettingController@index')->name('setting.index');
    Route::post('logo-update','SettingController@logoUpdate')->name('logo.update');
 
});
