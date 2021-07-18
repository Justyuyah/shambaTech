<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Farmer;
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

// Route::get('/', function () {
//     return view('/farmer/index');
// });

Route::get('/farmer', [AuthController::class, 'farmer'])->name('farmer');
Route::post('/farmer', [AuthController::class, 'farmerLogin'])->name('farmer');
Route::get('/farmer/register', [AuthController::class, 'farmerRegister'])->name('farmer/register');
Route::post('/farmer/register', [AuthController::class, 'farmerRegisterProcess'])->name('farmer/register');
Route::get('/farmer/home', [Farmer::class, 'index'])->name('/farmer/home');
Route::post('/farmer/logout', [AuthController::class, 'farmerLogout'])->name('farmer/logout');
Route::get('/about', function () {
    return view('about');
});

//farmers Editprofile
Route::get('/farmer/profile', [Farmer::class,'farmerProfile'])->name('farmer/profile');
Route::post('/farmer/profile/{id}', [Farmer::class,'editFarmerProfile'])->name('farmer/profile');



Route::get('/farmer/viewProfile', [Farmer::class,'viewProfile'])->name('farmer/viewProfile');

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/farmer/profile', function () {
//    return view('/farmer/profile');
//});
