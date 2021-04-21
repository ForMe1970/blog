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
Route::post('hook', function() {
    system('sudo cd /var/www/html/blog');
    system('sudo unset GIT_DIR');
    system('sudo git pull');
});

Route::get('/', 'Blog\HomeController@index');
Route::get('/categorys/{category}', 'Blog\HomeController@categorys')->name('home.categorys');