<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\FeeHeadController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function(){
    Route::group(['middleware'=>'admin.guest'],function(){
        Route::get('login', [AdminController::class, 'index'])->name('admin.login');
Route::get('register', [AdminController::class, 'register'])->name('admin.register');
Route::post('login', [AdminController::class, 'authenticate'])->name('admin.authenticate');

    Route::group(['middleware'=>'admin.auth'],function(){
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('form', [AdminController::class, 'form'])->name('admin.form');
Route::get('table', [AdminController::class, 'table'])->name('admin.table');
Route::get('table', [AdminController::class, 'table'])->name('admin.table');
Route::get('academic-year/create', [AcademicYearController::class, 'index'])->name('academic-year.create');
Route::post('academic-year/store', [AcademicYearController::class, 'index'])->name('academic-year.store');
Route::get('academic-year/read', [AcademicYearController::class, 'index'])->name('academic-year.read');
Route::get('academic-year/delete/{id}', [AcademicYearController::class, 'delete'])->name('academic-year.delete');
Route::get('academic-year/edit/{id}', [AcademicYearController::class, 'edit'])->name('academic-year.edit');
Route::get('academic-year/update/{id}', [AcademicYearController::class, 'update'])->name('academic-year.update');

Route::get('class/create', [ClassesController::class, 'index'])->name('class.create');
Route::post('class/store', [ClassesController::class, 'store'])->name('class.store');
Route::get('class/read', [ClassesController::class, 'read'])->name('class.read');
Route::get('class/edit{id}', [ClassesController::class, 'edit'])->name('class.edit');
Route::post('class/update', [ClassesController::class, 'update'])->name('class.update');
Route::get('class/delete{id}', [ClassesController::class, 'delete'])->name('class.delete');


Route::get('fee-head/create', [FeeHeadController::class, 'index'])->name('fee-head.create');
Route::post('fee-head/store', [FeeHeadController::class, 'store'])->name('fee-head.store');
Route::get('fee-head/read', [FeeHeadController::class, 'read'])->name('fee-head.read');
Route::get('fee-head/edit{id}', [FeeHeadController::class, 'edit'])->name('fee-head.edit');
Route::post('fee-head/update', [FeeHeadController::class, 'update'])->name('fee-head.update');
Route::get('fee-head/delete{id}', [FeeHeadController::class, 'delete'])->name('fee-head.delete');


    
    
});

