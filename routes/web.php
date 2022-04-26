<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('classes', App\Http\Controllers\classesController::class);



Route::resource('classrooms', App\Http\Controllers\classroomsController::class);


Route::resource('batches', App\Http\Controllers\batchesController::class);


Route::resource('levels', App\Http\Controllers\levelsController::class);


Route::resource('shifts', App\Http\Controllers\shiftsController::class);


Route::resource('courses', App\Http\Controllers\coursesController::class);


Route::resource('facultys', App\Http\Controllers\facultysController::class);


Route::resource('times', App\Http\Controllers\timesController::class);


Route::resource('attedances', App\Http\Controllers\attedancesController::class);


Route::resource('academics', App\Http\Controllers\academicsController::class);


Route::resource('days', App\Http\Controllers\daysController::class);


Route::resource('classAssignings', App\Http\Controllers\class_assigningsController::class);


Route::resource('classSchedullings', App\Http\Controllers\class_schedullingsController::class);


Route::resource('transactions', App\Http\Controllers\transactionsController::class);
