<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarsController::class, 'index']);
Route::get('/create', [CarsController::class, 'create']);
Route::post('/', [CarsController::class, 'store']);
