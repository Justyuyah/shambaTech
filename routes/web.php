<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Farmer;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Veo;
use App\Http\Controllers\Comment;

//admin
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::post('/admin', [AuthController::class, 'adminLogin'])->name('admin');
Route::post('/admin/signout', [Admin::class, 'logout'])->name('admin/signout');
Route::get('/admin/register', [AuthController::class, 'adminRegister'])->name('admin/register');
Route::post('/admin/register', [AuthController::class, 'adminRegisterProcess'])->name('admin/register');
Route::get('/admin/home', [Admin::class, 'index'])->name('admin/home');
Route::get('/admin/veo', [Admin::class, 'veo'])->name('admin/veo');
Route::get('/admin/veo/view/{id}', [Admin::class, 'veoView'])->name('admin/veo/view');
Route::post('/admin/veo/activate/{id}', [Admin::class, 'activateVeo'])->name('admin/veo/activate');
Route::post('/admin/veo/deactivate/{id}', [Admin::class, 'deactivateVeo'])->name('admin/veo/deactivate');
Route::get('/admin/farmer', [Admin::class, 'farmer'])->name('admin/farmer');
//end of Admin

//Farmer
Route::get('/', [AuthController::class, 'farmer'])->name('/');
Route::post('/farmer', [AuthController::class, 'farmerLogin'])->name('farmer');
Route::get('/farmer/register', [AuthController::class, 'farmerRegister'])->name('farmer/register');
Route::post('/farmer/register', [AuthController::class, 'farmerRegisterProcess'])->name('farmer/register');
Route::get('/farmer/home', [Farmer::class, 'index'])->name('/farmer/home');
Route::post('/farmer/logout', [Farmer::class, 'logout'])->name('farmer/logout');
Route::get('/farmer/article/view/{id}', [Farmer::class, 'articleView'])->name('farmer/article/view');
Route::post('/farmer/comment/{id}', [Comment::class, 'comment'])->name('farmer/comment');
//end of farmer

//veo
Route::get('/veo', [AuthController::class, 'veo'])->name('veo');
Route::post('/veo', [AuthController::class, 'veoLogin'])->name('veo');
Route::get('/veo/register', [AuthController::class, 'veoRegister'])->name('veo/register');
Route::post('/veo/register', [AuthController::class, 'veoRegisterProcess'])->name('veo/register');
Route::get('/veo/home', [Veo::class, 'index'])->name('veo/home');
Route::get('/veo/category', [Veo::class, 'category'])->name('veo/category');
Route::post('/veo/add/category', [Veo::class, 'categoryAdd'])->name('veo/add/category');
Route::post('/veo/logout', [Veo::class, 'logout'])->name('veo/logout');
Route::post('/post/article', [Veo::class, 'postArticle'])->name('post/article');
Route::get('/veo/article/view/{id}', [Veo::class, 'viewArticle'])->name('veo/article/view');
//end of veo
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

//farmers Editprofile
Route::get('/farmer/profile', [Farmer::class, 'farmerProfile'])->name('farmer/profile');
Route::post('/farmer/profile/{id}', [Farmer::class, 'editFarmerProfile'])->name('farmer/profile');



Route::get('/farmer/viewProfile', [Farmer::class, 'viewProfile'])->name('farmer/viewProfile');

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/farmer/profile', function () {
//    return view('/farmer/profile');
//});
