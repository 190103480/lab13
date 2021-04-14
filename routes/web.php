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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('example/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('home');
});

use App\Http\Controllers\TemplateController;
Route::get('/', 'App\Http\Controllers\TemplateController@index');

//Route::get('locale/{locale}', 'App\Http\Controllers\TranslateController@changeLocale')->name('reset');

use App\Http\Controllers\MailController;
Route::get('/send', [MailController::class, 'send']);

Route::view('upload', 'upload');

use App\Http\Controllers\UploadController;
Route::post('upload', [UploadController::class, 'index']);