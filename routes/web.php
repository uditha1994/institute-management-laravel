<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
    ;
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('institutes', InstituteController::class);
Route::resource('students', StudentController::class);
Route::resource('branches', BranchController::class);
Route::resource('exams', ExamController::class);