<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;







Route::get('/', function () {
    return view('welcome');
});


Route::resource('doctorCreate', ViewController::class);


// Route::resource('doctors', DoctorController::class)->middleware('auth');
// Route::resource('patients', PatientController::class)->middleware('auth');
// Route::resource('appointments', AppointmentController::class)->middleware('auth');

Route::resource('doctors', DoctorController::class);
Route::resource('patients', PatientController::class);
Route::resource('appointments', AppointmentController::class);


Route::get('login', [AuthController::class,'login'])->name('login');


