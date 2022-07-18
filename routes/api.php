<?php

use App\Http\Controllers\AuthController;
/* START - Merchant  */
use App\Http\Controllers\Merchant\MerchantController;
/* END */

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function () {
    Route::get('/hello', [HelloController::class, 'index']);

    #######  Merchant Routes #######

    Route::get('/list_all', [MerchantController::class, 'listMerchant']);
    Route::post('/merchant/list', [MerchantController::class, 'listMerchant']);
});
