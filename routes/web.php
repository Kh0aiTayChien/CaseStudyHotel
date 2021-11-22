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
    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('admin.logout');
    Route::get('/reload', [\App\Http\Controllers\UserController::class, 'reload'])->name('admin.reload');


    Route::group(["prefix" => "room"], function () {
        Route::get('/', [\App\Http\Controllers\RoomController::class, 'index'])->name('room.index');
        Route::get('/add', [\App\Http\Controllers\RoomController::class, 'create'])->name('room.create');
        Route::post('/add', [\App\Http\Controllers\RoomController::class, 'store'])->name('room.store');
        Route::get('/showroom',[\App\Http\Controllers\RoomController::class,'showroom'])->name('room.showroom');
        Route::get('{id}/update',[\App\Http\Controllers\RoomController::class,'edit'])->name('room.edit');
        Route::post('{id}/update',[\App\Http\Controllers\RoomController::class,'update'])->name('room.update');
        Route::get('{id}/delete',[\App\Http\Controllers\RoomController::class,'delete'])->name('room.delete');
        Route::post("/",[\App\Http\Controllers\RoomController::class,'order'])->name('room.order');
    });
    Route::group(["prefix" => "user"], function () {
        Route::get('/',[\App\Http\Controllers\UserController::class,'showprofile'])->name('user.showprofile');
        Route::post('/',[\App\Http\Controllers\UserController::class,'changeinfo'])->name('user.update');

    });

});




