<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FileController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/desserts', function () {
    return view('desserts');
})->name('desserts');

Route::get('/birthdays', function () {
    return view('birthdays');
})->name('birthdays');

Route::get('/weddings', function () {
    return view('weddings');
})->name('weddings');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/home/{lang}', function($lang){
    App::setlocale($lang);
    return view('home');
});

Route::get('/desserts/{lang}', function($lang){
    App::setlocale($lang);
    return view('desserts');
});

Route::get('/birthdays/{lang}', function($lang){
    App::setlocale($lang);
    return view('birthdays');
});

Route::get('/weddingd/{lang}', function($lang){
    App::setlocale($lang);
    return view('weddings');
});

Route::get('/about/{lang}', function($lang){
    App::setlocale($lang);
    return view('about');
});

Route::get('/order/{lang}', function($lang){
    App::setlocale($lang);
    return view('order');
});

Route::get('/{lang}', [LocalizationController::class, 'index']);

Route::get('mail/send', 'App\Http\Controllers\MailController@send')->name('sending');

Route::get('/project', [FileController::class, 'index']);

Route::post('/project', [FileController::class, 'uploadMultipleFiles'])->name('upload.store');
