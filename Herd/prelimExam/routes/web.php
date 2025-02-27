<?php

use App\Http\Controllers\HomeownerController;

Route::get('/homeowners/create', [HomeownerController::class, 'create']);
Route::post('/homeowners', [HomeownerController::class, 'store']);

