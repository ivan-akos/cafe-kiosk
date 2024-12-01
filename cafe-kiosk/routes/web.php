<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KioskController;


//Main kiosk page for making orders
Route::get('/', [KioskController::class, 'index']);
