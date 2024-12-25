<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentFacultyController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\StaffController;
Route::get('/', function () {
    return view('welcome');
});

// Route to display the prescription form
Route::get('/prescription/create', [PrescriptionController::class, 'create'])->name('prescription.create');

// Route to handle form submission (placeholder for backend logic)
Route::post('/prescription/store', [PrescriptionController::class, 'store'])->name('prescription.store');

// Route to display the diagnosis form
Route::get('/diagnosis/create', [DiagnosisController::class, 'create'])->name('diagnosis.create');

// Route to handle form submission (placeholder for backend logic)
Route::post('/diagnosis/store', [DiagnosisController::class, 'store'])->name('diagnosis.store');

// Route to display patient history
Route::get('/history', [HistoryController::class, 'index'])->name('history.index');

// Route to display the appointment form
Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');

// Route to handle form submission (this will store the appointment; backend logic can be added later)
Route::post('/appointment/create', [AppointmentController::class, 'store'])->name('appointment.store');

// Route to display the appointment list
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');

// Route to display the student and faculty registration form
Route::get('/student-faculty/register', [StudentFacultyController::class, 'create'])->name('studentFaculty.create');
Route::post('/student-faculty/register', [StudentFacultyController::class, 'store'])->name('studentFaculty.store');

// Route to display the staff registration form
Route::get('/staff/register', [StaffController::class, 'create'])->name('staff.create');

//Route::get('/staff/register', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff/register', [StaffController::class, 'store'])->name('staff.store');
