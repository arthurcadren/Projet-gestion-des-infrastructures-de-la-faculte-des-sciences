<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\SpotController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Api\GarageController;
use App\Http\Controllers\Api\ReservationController;

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

Route::post('/auth/register',[RegisterController::class,'register']);
Route::post('/auth/token',[LoginController::class,'token']);


Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('me',[UserController::class,'me']);
    //Route::get('reservations/{reservation:uuid}', [ReservationController::class, 'show']);
    Route::post('reservations', [ReservationController::class, 'store']);
    Route::patch('reservations/{reservation}', [ReservationController::class, 'update']);
    Route::delete('reservations/{reservation}', [ReservationController::class, 'destroy']);
    // Route::post('/calculate-payment', PaymentController::class);
    // Route::get('checkout/{reservation}', [CheckoutController::class, 'show']);
});

Route::middleware(['internal'])->group(function () {
    Route::get('garages', [GarageController::class, 'index']);
    Route::get('garages/{garage}', [GarageController::class, 'show']);
    Route::get('garages/{garage}/spots', [SpotController::class, 'index']);
});


/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
