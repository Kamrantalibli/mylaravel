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

Route::match(['get', 'post'], '/support-form', 'SupportFormController@support')->name('support-form.support');

Route::patch('/users/{id}/update', 'UserController@update')->name('user.update');
/* 
    Patch => It is used if only one information of the user is to be updated. Example only email.

    Put => we can update all the user's information.
*/
Route::put('/users/{id}/all-update', 'UserController@updateAll')->name('user.updateAll');

Route::delete('/users/{id}/delete', 'UserController@delete')->name('user.delete');

Route::any('/everything', function () {
    dd('Everything came');
});

Route::resource('article', 'ArticleController');

// Route::apiResource('/api/article', 'Api/ArticleController');

Route::get('users/{id}', 'UserController@show')
    ->name('user.show')
    ->whereNumber('id');            // Only integer value accept

Route::get('users/{name}', 'UserController@showName')
    ->name('user.showName')
    // ->whereAlpha('name');        // Only string value accept
    ->whereAlphaNumeric('name');    // String,Integer values accept

Route::get('user/{role}', 'UserController@roleCheck')
->name('user.roleCheck')
->whereIn('role', ['admin', 'user']);

Route::prefix("admin")->group(function(){
    Route::get('/create-article', 'ArticleController@create')->name('admin.articleCreate');
    Route::get('/edit-article', 'ArticleController@edit')->name('admin.articleEdit');
    Route::get('/article/{id}/delete', 'ArticleController@destroy')->name('admin.articleDestroy');
});

Route::controller(UserController::class)->prefix('admin')->group(function(){
    Route::get('/get-user', 'getUser');
    Route::get('/delete-user', 'deleteUser');
});