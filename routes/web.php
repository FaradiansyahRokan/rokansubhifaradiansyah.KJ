<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/' , function(){
    return view('index');
});
Route::get('/home' ,[HomeController::class , 'index']);
Route::get('/course/javascript' , function(){
    return view('js');
});
Route::get('/course/html-css' , function(){
    return view('');
});
Route::get('/course/javascript' , function(){
    return view('js');
});
Route::get('/course/javascript' , function(){
    return view('js');
});
Auth::routes(['verify' => true]);
// Route::get('/account' , [HomeController::class , 'account']);
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
