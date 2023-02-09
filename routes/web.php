<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\JobProviderController;
use App\Http\Controllers\AdminprofileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [LoginController::class, 'index'])->name('get.login');

Route::group([  'prefix' => 'auth' ], function ($router) {
    // AUTH
    Route::post('/getotp',    [LoginController::class, 'generate'])->name('get.otp');
    Route::get('/otp',   [LoginController::class, 'getotp'])->name('otp');
    Route::post('/verify', [LoginController::class, 'verify'])->name('verify');
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');
});

Route::group([  'prefix' => 'admin' ], function ($router) {
    // job
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/addjob', [AdminController::class, 'addjob'])->name('get.addjob');
    Route::post('/createjob', [AdminController::class, 'createjob'])->name('create.job');
    Route::get('/viewjob', [AdminController::class, 'viewjob'])->name('view.job');
    //industry
    Route::get('/industry', [IndustryController::class, 'index'])->name('view.industry');
    Route::post('/industry/store', [IndustryController::class, 'store'])->name('add.industry');
    Route::get('/industry/edit/{id}', [IndustryController::class, 'edit'])->name('edit.industry');
    Route::post('/industry/update', [IndustryController::class, 'update'])->name('update.industry');
    Route::post('/industry/{id}/destroy', [IndustryController::class, 'destroy'])->name('industry.destroy');   
    //admin
    Route::get('/admin', [AdminprofileController::class, 'admin'])->name('view.admin');
    Route::post('/adminregister', [AdminprofileController::class, 'register'])->name('register.admin');
    Route::get('/changeStatus', [AdminprofileController::class, 'changeStatus'])->name('view.status');
   
    Route::get('/profileadmin', [AdminprofileController::class, 'edit'])->name('profile.admin');
    Route::post('/updateadmin',[AdminprofileController::class, 'update'])->name('update.admin');
    Route::post('/updateadmins/{id}',[AdminprofileController::class, 'update1'])->name('update1.admin');
    Route::get('/deleteadmins/{id}', [AdminprofileController::class, 'delete'])->name('Admin.delete');
    //job provider

    Route::get('/jobprovider', [JobProviderController::class, 'jobprovider'])->name('view.jobprovider');
    Route::get('/add', [JobProviderController::class, 'jobprovider1'])->name('get.addjobprovider');
    Route::post('/addjobprovider', [JobProviderController::class, 'addjobprovider'])->name('add.jobprovider');
    Route::get('category/{id}', [JobProviderController::class, 'getcategory'])->name('categories');
    Route::get('/editjobprovider/{id}', [JobProviderController::class, 'edit'])->name('get.editjobprovider');
    Route::post('/update/{id}', [JobProviderController::class, 'update'])->name('update.jobprovider');

    //subscription plan
    Route::get('/subcription', [SubController::class, 'index'])->name('view.subscription');

    //candidate

    Route::get('/candidate', [CandidateController::class, 'candidate'])->name('view.candidate');
    Route::get('/addcandidate', [CandidateController::class, 'addcandidate'])->name('view.addcandidate');
    Route::post('/addcandidate1', [CandidateController::class, 'add'])->name('add.candidate');

    //notications
    Route::get('/notifications', [NotificationController::class, 'notification'])->name('view.notification');
  
    Route::post('/addcandidate', [NotificationController::class, 'add'])->name('add.notification');

   //order
   Route::get('/order', [OrderController::class, 'order'])->name('view.order');
    
});
