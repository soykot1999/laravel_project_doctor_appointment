<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\DepartmentController;




// Home Route

Route::get('/',[HomeController::class,'index'])->name('home');


// Doctor route
Route::get('/add-doctor',[DoctorController::class,'index'])->name('add.doctor');
Route::post('/save-doctor',[DoctorController::class, 'saveDoctor'])->name('save.doctor');
Route::get('/edit-doctor/{doctor_id}',[DoctorController::class, 'editDoctor'])->name('edit.doctor');
Route::post('/update-doctor',[DoctorController::class,'updateDoctor'])->name('update.doctor');
Route::get('/delete-doctor/{doctor_id}',[DoctorController::class, 'deleteDoctor'])->name('delete.doctor');

//department route
Route::get('/department',[DepartmentController::class,'index'])->name('department');
Route::post('/save-department',[DepartmentController::class, 'saveDepartment'])->name('save.department');
Route::get('/edit-department/{department_id}',[DepartmentController::class, 'editDepartment'])->name('edit');
Route::post('/update-department',[DepartmentController::class,'updateDepartment'])->name('update.department');
Route::get('/delete-department/{department_id}',[DepartmentController::class, 'deleteDepartment'])->name('delete.department');


//Appoinment route
Route::get('/appoinment',[AppoinmentController::class,'index'])->name('appoinment');
Route::post('/save-app',[AppoinmentController::class, 'saveapp'])->name('app');


