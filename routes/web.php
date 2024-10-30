<?php

use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InformationController::class, 'index']);