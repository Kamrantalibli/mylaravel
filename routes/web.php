<?php
 
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

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

Route::get('/', "HomeController@index")->name('home');

Route::get('/about', "HomeController@about")->name('about');

Route::get('/contact', 'ContactController@showForm')->name('contact');

Route::post('/contact', 'ContactController@contact');

Route::post('/user/{id}/{name?}', 'ContactController@user')
    ->name('user')
    // ->where("id", "[0-9]+");
    ->where(["id" => "[0-9]+", "name" => "[a-z]+"]);
