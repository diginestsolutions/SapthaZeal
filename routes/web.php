<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\JobProviderController;
use App\Http\Controllers\Admin\AdminprofileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\JobController;
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
    Route::get('/job', [JobController::class, 'index'])->name('view.job');
    Route::get('/job/create', [JobController::class, 'create'])->name('get.addjob');
    Route::post('/job/store',[JobController::class, 'store'])->name('create.job');
    Route::post('/job/{id}/status-approved', [JobController::class, 'statusapproved'])->name('job.approvde');
    Route::post('/job/{id}/status-rejected', [JobController::class, 'statusrejected'])->name('job.rejected');
    Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('edit.job');
    Route::post('/job/update/{id}', [JobController::class, 'update'])->name('update.job');
    Route::post('/job/{id}/destroy', [JobController::class, 'destroy'])->name('job.destroy');
    Route::get('/job/show/{id}', [JobController::class, 'show'])->name('show.job');
    Route::get('/job/response/{id}', [JobController::class, 'jobresponse'])->name('response.job');
    Route::post('/job/response/status-list/{id}', [JobController::class, 'responsestatuslist'])->name('job.response.statuslist');
  
    //industry
    Route::get('/industry', [IndustryController::class, 'index'])->name('view.industry');
    Route::post('/industry/store', [IndustryController::class, 'store'])->name('add.industry');
    Route::get('/industry/edit/{id}', [IndustryController::class, 'edit'])->name('edit.industry');
    Route::post('/industry/update', [IndustryController::class, 'update'])->name('update.industry');
    Route::post('/industry/{id}/destroy', [IndustryController::class, 'destroy'])->name('industry.destroy');
    
    //admin
    Route::get('/admin', [AdminprofileController::class, 'index'])->name('view.admin');
    Route::post('/adminregister', [AdminprofileController::class, 'store'])->name('register.admin');
    Route::get('/changeStatus', [AdminprofileController::class, 'changeStatus'])->name('view.status');
    Route::get('/showadmin/{id}', [AdminprofileController::class, 'show'])->name('show.admin');
    Route::get('/editadmin/{id}', [AdminprofileController::class, 'edituser'])->name('edit.admin');
    Route::get('/profileadmin', [AdminprofileController::class, 'edit'])->name('profile.admin');
    Route::post('/updateadmin',[AdminprofileController::class, 'update'])->name('update.admin');
    Route::post('/updateadmins',[AdminprofileController::class, 'update1'])->name('update1.admin');
    Route::post('/admindestroy/{id}', [AdminprofileController::class, 'destroy'])->name('admin.destroy');

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
    Route::get('/candidate', [CandidateController::class, 'index'])->name('view.candidate');
    Route::get('/candidate/create', [CandidateController::class, 'create'])->name('view.addcandidate');
    Route::post('/candidate/store-basic', [CandidateController::class, 'store'])->name('add.candidate');
    Route::post('/candidate/store-education', [CandidateController::class, 'addeducation'])->name('add.addeducation');
    Route::get('/candidate/edit-education/{id}', [CandidateController::class, 'editeducation'])->name('candidate.education.edit');
    Route::post('/candidate/{id}/education-destroy', [CandidateController::class, 'educationdestroy'])->name('education.destroy');
    Route::post('/candidate/store-experience', [CandidateController::class, 'addexperience'])->name('add.candidate.experience');
    Route::post('/candidate/change-status', [CandidateController::class, 'changestatus'])->name('change.candidate.status');
    Route::get('/candidate/edit/{id}', [CandidateController::class, 'edit'])->name('edit.candidate');
    Route::post('/candidate/update', [CandidateController::class, 'update'])->name('update.candidate');
    Route::post('/candidate/update-experience', [CandidateController::class, 'updateexperience'])->name('update.candidate.experience');
    Route::get('/candidate/show/{id}', [CandidateController::class, 'show'])->name('show.candidate');
    //Route::post('/addcandidate1', [CandidateController::class, 'add'])->name('add.candidate');

    //Route::get('/candidate', [CandidateController::class, 'candidate'])->name('view.candidate');
    //Route::get('/addcandidate', [CandidateController::class, 'addcandidate'])->name('view.addcandidate');
   // Route::post('/addcandidate1', [CandidateController::class, 'add'])->name('add.candidate');
    Route::get('/addeducation', [CandidateController::class, 'education'])->name('add.education');

    //notications
    Route::get('/notifications', [NotificationController::class, 'notification'])->name('view.notification');
  
    Route::post('/addcandidate', [NotificationController::class, 'add'])->name('add.notification');
 
   //order
   Route::get('/order', [OrderController::class, 'order'])->name('view.order');
    
});
