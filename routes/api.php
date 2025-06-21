<?php

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
