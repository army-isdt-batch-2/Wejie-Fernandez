<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
])->name('login');

Route::get('/table', [
    App\Http\Controllers\LoginController::class,
    'table'
])->name('table');

Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
])->name('layout');

Route::get('/form', [
    App\Http\Controllers\LoginController::class,
    'form'
])->name('form');


Route::get('/departments/create', [
    App\Http\Controllers\LoginController::class,
    'departments_create'
])->name('departments');


Route::get('/employees/create', [
    App\Http\Controllers\LoginController::class,
    'employees_create'
])->name('employees');


Route::get('/leaves/create', [
    App\Http\Controllers\LoginController::class,
    'leaves_create'
])->name('leaves');

Route::get('/loans/create', [
    App\Http\Controllers\LoginController::class,
    'loans_create'
])->name('loans');

Route::get('/deductions/create', [
    App\Http\Controllers\LoginController::class,
    'deductions_create'
])->name('deductions');

Route::get('/timekeeping/create', [
    App\Http\Controllers\LoginController::class,
    'timekeeping_create'
])->name('timekeeping');

Route::get('/payslips/create', [
    App\Http\Controllers\LoginController::class,
    'payslips_create'
])->name('payslips');











 
Route::get('/departments', [
    App\Http\Controllers\LoginController::class,
    'departments'
])->name('departments');

Route::get('/employees', [
    App\Http\Controllers\LoginController::class,
    'employees'
])->name('employees');

Route::get('/loans', [
    App\Http\Controllers\LoginController::class,
    'loans'
])->name('loans'); 

Route::get('/payslips', [
    App\Http\Controllers\LoginController::class,
    'payslips'
])->name('payslips');

Route::get('/leaves', [
    App\Http\Controllers\LoginController::class,
    'leaves'
])->name('leaves');

Route::get('/mandatory_deductions', [
    App\Http\Controllers\LoginController::class,
    'mandatorydeductions'
])->name('mandatory_deductions');

Route::get('/timekeeping', [
    App\Http\Controllers\LoginController::class,
    'timekeeping'
])->name('timekeeping');