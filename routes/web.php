<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Farmer;
<<<<<<< HEAD
use App\Http\Controllers\Admin;
use App\Http\Controllers\Veo;

//admin
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::post('/admin', [AuthController::class, 'adminLogin'])->name('admin');
Route::get('/admin/register', [AuthController::class, 'adminRegister'])->name('admin/register');
Route::post('/admin/register', [AuthController::class, 'adminRegisterProcess'])->name('admin/register');
Route::get('/admin/home', [Admin::class, 'index'])->name('admin/home');
//end of Admin

//Farmer
=======
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

>>>>>>> 838b83a9268203c70284163cf8d8eb72b0a84ed2
Route::get('/farmer', [AuthController::class, 'farmer'])->name('farmer');
Route::post('/farmer', [AuthController::class, 'farmerLogin'])->name('farmer');
Route::get('/farmer/register', [AuthController::class, 'farmerRegister'])->name('farmer/register');
Route::post('/farmer/register', [AuthController::class, 'farmerRegisterProcess'])->name('farmer/register');
Route::get('/farmer/home', [Farmer::class, 'index'])->name('/farmer/home');
Route::post('/farmer/logout', [AuthController::class, 'farmerLogout'])->name('farmer/logout');
<<<<<<< HEAD
//end of farmer

//veo
Route::get('/veo', [AuthController::class, 'veo'])->name('veo');
Route::post('/veo', [AuthController::class, 'veoLogin'])->name('veo');
Route::get('/veo/register', [AuthController::class, 'veoRegister'])->name('veo/register');
Route::post('/veo/register', [AuthController::class, 'veoRegisterProcess'])->name('veo/register');
Route::get('/veo/home', [Veo::class, 'index'])->name('veo/home');
Route::post('/veo/logout', [AuthController::class, 'veoLogout'])->name('veo/logout');
//end of veo
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
=======
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
>>>>>>> 838b83a9268203c70284163cf8d8eb72b0a84ed2
