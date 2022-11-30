<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\InvoiceController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('V1')->namespace('App\Http\Controllers\Api\V1')->middleware('auth:sanctum')->group(function () {
    Route::apiResource('customers',CustomerController::class);
    Route::apiResource('invoices',InvoiceController::class);
    Route::get('customers/index',[CustomerController::class,'index_show']);
    Route::post('invoices/bulk', ['uses' => 'InvoiceController@bulkStore']);
});
