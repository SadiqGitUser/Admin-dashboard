<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::prefix('admin')->middleware('auth')->group(function (){

    Route::get('/','AdminController@index')->name('index');
    Route::get('/', 'ProductController@index')->name('mehsullar');

    Route::resource('products', 'ProductController');
    Route::resource('users', 'UsersController');
});


Route::get('login','Auth\LoginController@showLogin')->name('login');
Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::post('login','Auth\LoginController@login');

