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
    return view('backend.index');
});
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');

Route::group(["prefix" => "admin"], function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('admin.index');
    Route::post('/', [\App\Http\Controllers\UserController::class, 'checklogin'])->name('admin.check');
    Route::get('/', [\App\Http\Controllers\UserController::class, 'logout'])->name('admin.logout');


    Route::group(["prefix" => "room"], function () {
        Route::get('/', [\App\Http\Controllers\RoomController::class, 'index'])->name('room.index');
    });
});




