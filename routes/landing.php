<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\TestingController;


Route::get('/', [TestingController::class, 'landing'])->name('home.index');
