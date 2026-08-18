<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    /*
    |--------------------------------------------------------------------------
    | Patients
    |--------------------------------------------------------------------------
    */

    // View patients
    Route::middleware('role:admin,doctor,receptionist')->group(function () {
        Route::get('/patients', [PatientController::class, 'index'])
            ->name('patients.index');

        Route::get('/patients/{patient}', [PatientController::class, 'show'])
            ->name('patients.show');
    });

    // Manage patients
    Route::middleware('role:admin,receptionist')->group(function () {
        Route::get('/patients/create', [PatientController::class, 'create'])
            ->name('patients.create');

        Route::post('/patients', [PatientController::class, 'store'])
            ->name('patients.store');

        Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])
            ->name('patients.edit');

        Route::put('/patients/{patient}', [PatientController::class, 'update'])
            ->name('patients.update');

        Route::patch('/patients/{patient}', [PatientController::class, 'update']);

        Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])
            ->name('patients.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Doctors
    |--------------------------------------------------------------------------
    */

    // View doctors
    Route::middleware('role:admin,doctor,receptionist')->group(function () {
        Route::get('/doctors', [DoctorController::class, 'index'])
            ->name('doctors.index');

        Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])
            ->name('doctors.show');
    });

    // Manage doctors - Admin only
    Route::middleware('role:admin')->group(function () {
        Route::get('/doctors/create', [DoctorController::class, 'create'])
            ->name('doctors.create');

        Route::post('/doctors', [DoctorController::class, 'store'])
            ->name('doctors.store');

        Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])
            ->name('doctors.edit');

        Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])
            ->name('doctors.update');

        Route::patch('/doctors/{doctor}', [DoctorController::class, 'update']);

        Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])
            ->name('doctors.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Specialties
    |--------------------------------------------------------------------------
    */

    // View specialties
    Route::middleware('role:admin,doctor,receptionist')->group(function () {
        Route::get('/specialties', [SpecialtyController::class, 'index'])
            ->name('specialties.index');

        Route::get('/specialties/{specialty}', [SpecialtyController::class, 'show'])
            ->name('specialties.show');
    });

    // Manage specialties - Admin only
    Route::middleware('role:admin')->group(function () {
        Route::get('/specialties/create', [SpecialtyController::class, 'create'])
            ->name('specialties.create');

        Route::post('/specialties', [SpecialtyController::class, 'store'])
            ->name('specialties.store');

        Route::get('/specialties/{specialty}/edit', [SpecialtyController::class, 'edit'])
            ->name('specialties.edit');

        Route::put('/specialties/{specialty}', [SpecialtyController::class, 'update'])
            ->name('specialties.update');

        Route::patch('/specialties/{specialty}', [SpecialtyController::class, 'update']);

        Route::delete('/specialties/{specialty}', [SpecialtyController::class, 'destroy'])
            ->name('specialties.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Appointments
    |--------------------------------------------------------------------------
    */

    // View appointments
    Route::middleware('role:admin,doctor,receptionist')->group(function () {
        Route::get('/appointments', [AppointmentController::class, 'index'])
            ->name('appointments.index');

        Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])
            ->name('appointments.show');
    });

    // Create appointments
    Route::middleware('role:admin,receptionist')->group(function () {
        Route::get('/appointments/create', [AppointmentController::class, 'create'])
            ->name('appointments.create');

        Route::post('/appointments', [AppointmentController::class, 'store'])
            ->name('appointments.store');
    });

    // Edit appointments
    Route::middleware('role:admin,doctor,receptionist')->group(function () {
        Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])
            ->name('appointments.edit');

        Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])
            ->name('appointments.update');

        Route::patch('/appointments/{appointment}', [AppointmentController::class, 'update']);
    });

    // Delete appointments - Admin only
    Route::middleware('role:admin')->group(function () {
        Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])
            ->name('appointments.destroy');
    });
});




require __DIR__.'/auth.php';