<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ApiController;

Route::get('get-name', [ApiController::class, 'getData']);

Route::post('register', [ApiController::class, 'register']);

Route::post('edit', [ApiController::class, 'edit']);

Route::post('delete', [ApiController::class, 'delete']);
