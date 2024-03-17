<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\indexController;

Route::get('/',[indexController::class, 'index'])->name('index');
