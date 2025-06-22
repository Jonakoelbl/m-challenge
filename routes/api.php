<?php

use App\Http\Controllers\BenefitController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GiftCardRedemptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VariationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('user', UserController::class);
Route::apiResource('order',GiftCardRedemptionController::class);
Route::apiResource('variation',VariationController::class);
Route::apiResource('benefit',BenefitController::class);
Route::apiResource('company',CompanyController::class);
//Route::get('company/billing-last-week', [CompanyController::class, 'getBillingByCompany']);
//Route::get('company/{company}/consumption-last-week', [CompanyController::class, 'getConsumptionLastWeek']);
