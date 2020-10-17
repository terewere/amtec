<?php

use Illuminate\Support\Facades\Route;




Route::resource('subjects', App\Http\Controllers\SubjectController::class);

Route::resource('students', App\Http\Controllers\StudentController::class);
Route::get('students-data', [App\Http\Controllers\StudentController::class, 'getStudentData']);


Route::resource('teachers', App\Http\Controllers\StudentController::class);
Route::get('teachers-data', [App\Http\Controllers\StudentController::class, 'getTeacherData']);




Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');