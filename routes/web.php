<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

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

Route::group([  'prefix' => 'auth' ], function ($router) {

    // AUTH
    Route::get('/getlogin', [LoginController::class, 'getlogin'])->name('get.login');
    Route::get('/getotp',    [LoginController::class, 'getotp'])->name('get.otp');
    Route::post('/login',   [LoginController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']); 
    Route::post('/loginotp', [AuthController::class, 'loginotp']);
    Route::post('/otp1', [AuthController::class, 'otp1']);
    Route::post('/otp2', [AuthController::class, 'otp2']);
   

});

Route::group([  'prefix' => 'admin' ], function ($router) {

    // AUTH
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('get.dashboard');
  
    Route::get('/dashboard1', [AdminController::class, 'dashboard1'])->name('get.dashboard1');

});