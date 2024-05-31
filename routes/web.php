<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('contents.landingcontent');
});

Route::get('/login', function () {
    return view('layouts.auth.login');
})->name('login');

Route::get('/register', function () {
    return view('layouts.auth.register');
})->name('register');

// Admin Side

Route::get('/back-office', function () {
    return view('layouts.admin.admin');
})->name('backoffice');

Route::get('/usersdata', function () {
    return view('layouts.admin.userdata');
})->name('userdata');

Route::get('/listfilm', function () {
    return view('layouts.admin.listfilm');
})->name('listfilm');

// User Side
Route::get('/dashboard', function () {
    return view('layouts.user.user');
})->name('user');


// Testing
Route::get('/test', function () {
    return view('testing');
})->name('test');

Route::resource("test", AdminController::class);