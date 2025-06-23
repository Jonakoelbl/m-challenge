<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GiftCardRedemptionController;
use App\Http\Controllers\VariationController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);


    Route::controller(CompanyController::class)->prefix('company')->group(function () {
        Route::middleware('restrictRole:maslow_admin,company_admin')->group(function () {
            Route::get('/', 'index');
            Route::get('/{company}', 'show');
            Route::get('/consumption-last-week/{company}', 'consumptionLastWeek');
        });

        Route::middleware('restrictRole:maslow_admin')->group(function () {
            Route::get('/billing-by-company', 'billingByCompany');
            Route::post('/', 'store');
            Route::put('/{company}', 'update');
            Route::delete('/{company}', 'destroy');
        });
    });

    Route::controller(EmployeeController::class)->group(function() {
        Route::middleware('restrictRole:maslow_admin, company_admin')->group(function () {
            Route::apiresource('employee', EmployeeController::class);
        });
    });

    Route::controller(VariationController::class)->prefix('variation')->group(function(){
        Route::get('/', 'index');
        Route::get('/{variation}', 'show');
        Route::middleware('restrictRole:maslow_admin')->group(function(){
            Route::post('/', 'store');
            Route::put('/{variation}', 'update');
            Route::delete('/{variation}', 'destroy');
        });
    });

    Route::controller(BenefitController::class)->prefix('benefit')->group(function(){
        Route::get('/', 'index');
        Route::get('/{benefit}', 'show');
        Route::middleware('restrictRole:maslow_admin')->group(function(){
            Route::post('/', 'store');
            Route::put('/{benefit}','update');
            Route::delete('/{benefit}', 'destroy');
        });
    });

    Route::controller(GiftCardRedemptionController::class)->prefix('order')->group(function(){
        Route::get('/', 'index');
        Route::get('/{order}', 'show');
        Route::post('/', 'store');
        Route::middleware('restrictRole:maslow_admin')->group(function(){
            Route::put('/{order}', 'update');
            Route::delete('/{order}', 'destroy');
        });
    });
});

