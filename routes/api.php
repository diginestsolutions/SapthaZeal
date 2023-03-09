

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SubscriptionController;
/**Job Seeker */
use App\Http\Controllers\Api\Jobseeker\ProfileController;
use App\Http\Controllers\Api\Jobseeker\HomeController;
use App\Http\Controllers\Api\Jobseeker\JobController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctu123')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([ 'middleware' => 'api', 'prefix' => 'auth' ], function ($router) {
    // AUTH
    Route::post('/register', [AuthController::class, 'register']);
    //Route::post('/jobseeker/login',[App\Http\Controllers\Api\AuthController::class,'jobseekerlogin']);  
    Route::post('/loginotp',[App\Http\Controllers\Api\AuthController::class,'loginotp']);
});
Route::group([ 'middleware' => 'api', 'prefix' => 'admin' ], function ($router) {
    //subscriptionplans
    Route::post('/create-subscription', [SubscriptionController::class, 'Create']);
    Route::delete('/delete-subscriptionplan/{id}', [SubscriptionController::class, 'Delete']);
});

/**
 * JOB SEEKER API
 */
Route::group([ 'middleware' => 'api', 'prefix' => 'jobseeker' ], function ($router) {
    /**Auth APIS */
    Route::post('/register',[App\Http\Controllers\Api\Jobseeker\AuthController::class,'register']); 
    Route::post('/loginotp',[App\Http\Controllers\Api\Jobseeker\AuthController::class,'loginotp']); 
    Route::post('/login',[App\Http\Controllers\Api\Jobseeker\AuthController::class,'jobseekerlogin']);
    Route::post('/resendotp',[App\Http\Controllers\Api\Jobseeker\AuthController::class,'resendotp']);   

    Route::get('/profile/{id}', [ProfileController::class, 'profile']);
    Route::post('/add-basic-details',[ProfileController::class,'basicdetails']);
    Route::post('/add-educational-details',[ProfileController::class,'educationaldetails']);
    Route::post('/add-experience-details',[ProfileController::class,'experiencedetails']);
    Route::post('/add-skill-details',[ProfileController::class,'skilldetails']);

    Route::get('/home/{id}', [HomeController::class, 'home']);
    Route::get('/hot-jobs', [HomeController::class, 'hotjobs']);
    Route::get('/recommended-jobs/{id}', [HomeController::class, 'recommendedjobs']);
    Route::get('/other-jobs/{id}', [HomeController::class, 'otherjobs']);
   
    Route::get('/job-details/{jobid}', [JobController::class, 'jobdetails']);
    Route::post('/save-jobs',[JobController::class,'savejobs']);
    Route::get('/saved-jobs-list/{candidateid}',[JobController::class,'savedjobslist']);

    Route::post('/applied-jobs',[JobController::class,'appliedjobs']);
    Route::get('/applied-jobs-list/{candidateid}',[JobController::class,'appliedjobslist']);
});