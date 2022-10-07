<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\TestsController;



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

// Route::redirect('/anasayfa','/');

// Route::get('/', function () {
//     return view('welcome');
// });

//
// Route::get('/anasayfa', function(){
//     return view('anasayfa');
// });

// Route::get('/kurumsal', function(){
//     return view('kurumsal');
// });
// Route::get('/iletisim', function(){
//     return view('iletisim');
// });
// Route::get('/referanslar', function(){
//     return view('referanslar');
// });

// Route::prefix('sayfalar')-> group( function (){
//     Route::get('/kurumsal', function(){
//         return view('kurumsal');
//     });
//     Route::get('/iletisim', function(){
//         return view('iletisim');
//     });
//     Route::get('/referanslar', function(){
//         return view('referanslar');
//     });
//     Route::fallback(function(){
//         return view('hata');
//     });
// });
// Route::fallback(function(){
//     return view('hata');
// });

// Route::resource('users', usersController::class );

// Route::get('/show', function(){
//     return view('users.show');
// });
// Route::get('/iletisim', function(){
//     return view('iletisim');
// });
 
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('about', function(){
//     return view('pages.about');
// });
// Route::get('home', function(){
//     return view('pages.home');
// });
// Route::get('contact', function(){
//     return view('contact.contact');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home', [pagesController::class, 'home']);
// Route::get('about', [pagesController::class, 'about']);
// Route::get('contact', [pagesController::class, 'contact']);
// Route::get('students', [pagesController::class, 'students']);

// Route::get('/form', function () {
//     return view('form');
// });

// Route::get('orders',[OrdersController::class, 'index']);

Route::get('create', [TestsController::class, 'create']);
Route::get('createNew', [TestsController::class, 'createNew']);
Route::get('read', [TestsController::class, 'read']);
Route::get('edit/{id}', [TestsController::class, 'edit']);
Route::get('update/{id}', [TestsController::class, 'update']);
Route::get('delete/{id}', [TestsController::class, 'delete']);