<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SettingController; 
use App\Http\Controllers\Backend\SectionController; 
use App\Http\Controllers\Backend\ClassController; 


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

Route::get('/', function () {

    return view('frontend.home');
});

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth','as'=>'admin.'], function() {
    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
    Route::get('/academic-setup',[HomeController::class,'academicSetup'])->name('academicSetup');
    Route::resource('users',UserController::class);
    Route::resource('roles',RoleController::class);
    Route::resource('permissions',PermissionController::class);
    Route::resource('settings',SettingController::class);
    Route::resource('sections',SectionController::class);
    Route::resource('classes',ClassController::class);
});

Auth::routes();
