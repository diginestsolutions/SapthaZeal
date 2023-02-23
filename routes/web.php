<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\JobProviderController;
use App\Http\Controllers\Admin\AdminprofileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ResponseController;
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
    Route::get('/getlogin', [LoginController::class, 'index'])->name('get.login');
    Route::post('/getotp',    [LoginController::class, 'generate'])->name('get.otp');
    Route::get('/otp',   [LoginController::class, 'getotp'])->name('otp');
    Route::post('/verify', [LoginController::class, 'verify'])->name('verify');
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');
    
   

});

Route::group([  'prefix' => 'admin' ], function ($router) {
  
    // dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    //job
    Route::get('/addjob', [JobController::class, 'addjob'])->name('get.addjob');
    Route::post('/createjob',[JobController::class, 'createjob'])->name('create.job');
    Route::get('/viewjob', [JobController::class, 'viewjob'])->name('view.job');
    Route::get('/showjob', [JobController::class, 'show'])->name('show.job');
    Route::get('/editjob', [JobController::class, 'edit'])->name('edit.job');
    
    //response
    Route::get('/getresponse', [ResponseController::class, 'get'])->name('get.response');
    Route::get('/getchat', [ResponseController::class, 'chat'])->name('view.chat');
    

    //industry
    Route::get('/industry', [IndustryController::class, 'index'])->name('view.industry');
    Route::post('/industry/store', [IndustryController::class, 'store'])->name('add.industry');
    Route::get('/industry/edit/{id}', [IndustryController::class, 'edit'])->name('edit.industry');
    Route::post('/industry/update', [IndustryController::class, 'update'])->name('update.industry');
    Route::post('/industry/{id}/destroy', [IndustryController::class, 'destroy'])->name('industry.destroy');
    
    //admin
    Route::get('/admin', [AdminprofileController::class, 'index'])->name('view.admin');
    Route::post('/adminregister', [AdminprofileController::class, 'store'])->name('register.admin');
    Route::post('/user/{id}/status-approved', [AdminprofileController::class, 'statusapproved'])->name('user.approved');
    Route::post('/user/{id}/status-rejected', [AdminprofileController::class, 'statusrejected'])->name('user.rejected');
    Route::get('/showadmin/{id}', [AdminprofileController::class, 'show'])->name('show.admin');
    Route::get('/editadmin/{id}', [AdminprofileController::class, 'edituser'])->name('edit.admin');
    Route::get('/profileadmin', [AdminprofileController::class, 'edit'])->name('profile.admin');
    Route::post('/updateadmin',[AdminprofileController::class, 'update'])->name('update.admin');
    Route::post('/updateadmins',[AdminprofileController::class, 'update1'])->name('update1.admin');
    Route::post('/admindestroy/{id}', [AdminprofileController::class, 'destroy'])->name('admin.destroy');
    //job provider

    //job provider
    Route::get('/jobprovider', [JobProviderController::class, 'index'])->name('view.jobprovider');
    Route::get('/jobprovider/create', [JobProviderController::class, 'create'])->name('get.addjobprovider');
    Route::post('/jobprovider/store', [JobProviderController::class, 'store'])->name('add.jobprovider');
    Route::get('/jobprovider/category/{id}', [JobProviderController::class, 'getcategory'])->name('categories');
    Route::post('/jobprovider/{id}/status-approved', [JobProviderController::class, 'statusapproved'])->name('jobprovider.approvde');
    Route::post('/jobprovider/{id}/status-rejected', [JobProviderController::class, 'statusrejected'])->name('jobprovider.rejected');
    Route::get('/jobprovider/edit/{id}', [JobProviderController::class, 'edit'])->name('get.editjobprovider');
    Route::post('/jobprovider/update/{id}', [JobProviderController::class, 'update'])->name('update.jobprovider');
    Route::get('/jobprovider/show/{id}', [JobProviderController::class, 'show'])->name('show.jobprovider');
    
    //subscription plan
    Route::get('/subcription', [SubController::class, 'index'])->name('view.subscription');

    //candidate

    Route::get('/candidate', [CandidateController::class, 'candidate'])->name('view.candidate');
    Route::get('/addcandidate', [CandidateController::class, 'addcandidate'])->name('view.addcandidate');
    Route::post('/addcandidate1', [CandidateController::class, 'add'])->name('add.candidate');
    Route::get('/addeducation', [CandidateController::class, 'education'])->name('add.education');

    //notications
    Route::get('/notifications', [NotificationController::class, 'notification'])->name('view.notification');
    Route::get('/show/{id}', [NotificationController::class, 'show'])->name('show.notification');
    Route::post('/addnotification', [NotificationController::class, 'add'])->name('add.notification');

   //order
   Route::get('/order', [OrderController::class, 'order'])->name('view.order');
    
});
