<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    $name = 'ujjal.0011';
    return view('hello', compact('name'));
});

Route::get('user-list', [UserController::class, 'userList']);
