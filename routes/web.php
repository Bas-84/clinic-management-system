<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::resource('patients', PatientController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('specialties', SpecialtyController::class);
Route::resource('appointments', AppointmentController::class);

