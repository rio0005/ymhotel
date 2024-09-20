<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReservationController;
use App\Models\reservation;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Room_typeController;
use App\Models\Room_type;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('guest/create',[GuestController::class,'create']);
Route::get('guest',[GuestController::class,'index']);

Route::get('reservation/create',[ReservationController::class,'create']);
Route::get('reservation', [ReservationController::class, 'index']);

Route::get('detail/create',[DetailController::class,'create']);

Route::get('room/create',[RoomController::class,'create']);

Route::get('room_type/create',[Room_typeController::class,'create']);

Route::get('/', function () {
    return view('welcome');
});
