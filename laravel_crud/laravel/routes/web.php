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



// Route::get('/login', function (){
//     return view('Auth.login');
// });



Route::get('/', [Login::class, 'index']);
Route::post('/signin', [Login::class, 'customLogin']);
 Route::get('signup', [Login::class, 'signup']);
 Route::post('/registration', [Login::class, 'customeRegistration']); 

Route::middleware('logincheck')->group(function () {

// Route::get('/dashboard', [Login::class, 'dashboard']); 

Route::get('/dashboard',[DashboardController::class,'dashboard']);

Route::get('signout', [Login::class, 'signOut']);

Route::resource('room', RoomController::class);

Route::resource('message', MessageController::class);

Route::resource('drug', DrugController::class);

Route::resource('appointment', AppointmentController::class);

} );
// Route::resource('login', Login::class);
