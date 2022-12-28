<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterUserController;

Route::resource('register', RegisterUserController::class)->only([
    'store'
])->names([
    'store' => 'register'
]);
