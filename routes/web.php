<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Service1Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
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
Route::group(["middleware"=> "auth"], function () {
    Route::get('/dashboard',[AuthController::class,'login_success']);
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    
});
Route::group(["middleware"=>"guest"], function () 
{
    Route::get('/',[AuthController::class,'home']);
    //Route::get('/',[HomeController::class, 'home'])->name('home');
    Route::get('service1',[Service1Controller::class,'service1'])->name('service1');
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register_done',[AuthController::class,'register_done'])->name('register_success');
    
    Route::post('/login_success',[HomeController::class,'home'])->name('login_success');
});
Route::get('/crud',[CrudController::class, 'crud']);
// Route::get('/read dat',[CrudController::class,'read']);


//Route::get('/logindone',[AuthController::class,'']);