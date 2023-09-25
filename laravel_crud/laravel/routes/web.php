<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\Login;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoomController;
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

Route::get('/',[DashboardController::class,'dashboard']);

// Route::get('/login', function (){
//     return view('Auth.login');
// });


Route::get('dashboard', [Login::class, 'dashboard']); 
Route::get('login', [Login::class, 'index'])->name('login');
Route::post('/signin', [Login::class, 'customLogin'])->name('login.custom'); 
Route::get('signup', [Login::class, 'signup'])->name('register-user');
Route::post('/registration', [Login::class, 'customeRegistration'])->name('register.custom'); 
Route::get('signout', [Login::class, 'signOut'])->name('signout');


// Route::resource('login', Login::class);

Route::resource('room', RoomController::class);

Route::resource('message', MessageController::class);

Route::resource('drug', DrugController::class);

Route::resource('appointment', AppointmentController::class);
