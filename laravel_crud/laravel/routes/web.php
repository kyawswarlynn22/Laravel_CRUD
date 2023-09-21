<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoomController;
use App\Models\appointment;
use App\Models\drug;
use App\Models\message;
use App\Models\room;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $roomClass = new room();
    $roomData = $roomClass->roomData();
    $messageClass = new message();
    $messageData = $messageClass->messageData();
    $drugListClass = new drug();
    $drugList = $drugListClass->drugList();
    $apmListClass = new appointment();
    $apmList = $apmListClass->apmList();
    return view('dashboard', [
        'apmList' => $apmList,
        "roomData" => $roomData,
        'messageData' => $messageData,
        "drugList" => $drugList,
    ]);
});

Route::resource('room', RoomController::class);

Route::resource('message', MessageController::class);

Route::resource('drug', DrugController::class);

Route::resource('appointment', AppointmentController::class);
