<?php

use Illuminate\Routing\RouteRegistrar;
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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]
],
function() {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/' , 'PagesController@index');
    //Route::get('/teacher', 'PagesController@teacher');
    Route::get('/about','PagesController@about');
    Route::get('/blog','PagesController@blog');
    Route::get('/contact','PagesController@contact');
    Route::get('/service-detail/{id}', 'PagesController@serviceDetail');
    Route::get('/article_single/{is}', 'PagesController@ArticleSingle');
    
    Route::get('/dashboard', 'AdminController@index');
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::resource('/art','ArticleController');
    Route::resource('/auth','AuthorController');
    Route::resource('/category','CategoryController');
    Route::resource('/tag', 'TagController');
    Route::resource('/video','VideoController');
   });
});


// Route::get('/', function () {
//     return view('welcome');
// });
