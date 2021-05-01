<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::prefix('admin')->as('admin.')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
});

Route::prefix('user')->as('user.')->middleware(['auth', 'isUser'])->group(function () {
    Route::get('/', function () {
        return view('frontend.user.dashboard');
    });
});

require __DIR__ . '/auth.php';
