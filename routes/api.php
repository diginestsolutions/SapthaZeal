

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SubscriptionController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([ 'middleware' => 'api', 'prefix' => 'auth' ], function ($router) {

    // AUTH

    
    Route::post('/register', [AuthController::class, 'register']);
   

});
Route::group([ 'middleware' => 'api', 'prefix' => 'admin' ], function ($router) {
 //subscriptionplans
 
 
 Route::post('/create-subscription', [SubscriptionController::class, 'Create']);
 Route::delete('/delete-subscriptionplan/{id}', [SubscriptionController::class, 'Delete']);
});