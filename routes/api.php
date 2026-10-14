<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SewaController;


Route::apiResource('sewa', SewaController::class);
