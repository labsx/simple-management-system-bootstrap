<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AdminController::class, 'index']); 
Route::post('/', [AdminController::class, 'process']);

 Route::post('logout', [AdminController::class, 'destroy']);

Route::post('/store', [AdminController::class, 'store']); 
Route::get('/dashboard', [AdminController::class, 'display']); 

Route::get('/register', function () {
    return view('staffreg');
});
   
Route::get('/staff', [AdminController::class, 'staff']);

 Route::get('/studentreg', [StudentController::class, 'student']);
Route::post('/add/student', [StudentController::class, 'store']);



