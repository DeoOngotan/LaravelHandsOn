<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/index', [StudentController::class, 'index'])->name('student.index');