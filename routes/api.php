<?php

use App\Http\Controllers\Orders\OrderController;
use Illuminate\Support\Facades\Route;

Route::resource('/cruds', 'CrudsController', [
    'except' => ['edit', 'show', 'store']
]);