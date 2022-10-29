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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//Route::get('/isal', function() {
    //return 'Selamat Datang Tuan Muda !';
//});



///Route::get('/profile', function () {
   // echo "Hello User!";
//})->name('profile');

//route::redirect('/isal', '/profile');

route::view('/greeting', 'greeting');

route::get('/user/{id}', function($id){
    return "User ".$id;
});
