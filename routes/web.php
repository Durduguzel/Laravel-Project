<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;


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
 
Route::get('/', function () {
    return view('home');
});
