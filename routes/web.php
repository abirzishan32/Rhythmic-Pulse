<?php

use App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'authentication';
});

Route::get('/authentication', [Authentication::class, 'index']);
