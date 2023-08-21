<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/register', function () {
    return view('userregistration');
});
Route::post('/store', [AdminController::class, 'store']); 
Route::get('/dashboard', [AdminController::class, 'display']); 

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/add/student', function () {
    return view('sturegistration');
});
