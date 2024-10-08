<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReservationController;
use App\Models\reservation;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Room_typeController;
use App\Models\guest;
use App\Models\Room_type;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RestaurantController;

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
Route::get('guest/form',[GuestController::class,'form']);
Route::post('guest',[GuestController::class,'store'])->name('guest.store');


// Route::get('reservation/create',[ReservationController::class,'create']);
Route::get('reservation', [ReservationController::class, 'index']);
Route::get('reservation/form', [ReservationController::class, 'form']);
Route::post('reservation',[ReservationController::class,'store'])->name('reservation.store');


Route::get('detail/create',[DetailController::class,'create']);
Route::get('detail', [DetailController::class, 'index']);

Route::get('room/create',[RoomController::class,'create']);
Route::get('room',[RoomController::class, 'index']);

Route::get('room_type/create',[Room_typeController::class,'create']);
Route::get('room_type',[Room_typeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('main',[MainController::class,'index']);

Route::get('restaurant', [RestaurantController::class, 'index']);