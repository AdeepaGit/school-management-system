<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;




Route::get('/', [AuthController::class,'login']);
Route::post('login', [AuthController::class,'AuthLogin']);
Route::get('logout', [AuthController::class,'AuthLogout']);
Route::get('forgot-password', [AuthController::class,'forgotPassword']);
Route::post('forgot-password', [AuthController::class,'postForgotPassword']);
Route::get('reset/{token}', [AuthController::class,'reset']);
Route::post('reset/{token}', [AuthController::class,'PostReset']);

Route::get('admin/admin/students', function () {
    return view('admin.admin.studentList');
});

Route::group(['middleware'=>'admin'],function () {
    Route::get('admin/dashboard', [DashboardController::class,'dashboard']);
    
    Route::get('admin/admin/list', [AdminController::class,'list']);
    Route::get('admin/admin/addAdmin', [AdminController::class,'addAdmin']);
    Route::post('admin/admin/addAdmin', [AdminController::class,'insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class,'edit']);
    Route::put('admin/admin/edit/{id}', [AdminController::class,'update']);
    Route::get('admin/admin/deleteAdmin/{id}', [AdminController::class,'delete']);

    Route::get('admin/admin/students', [StudentController::class,'list']);
    Route::get('admin/admin/addStudent', [StudentController::class,'addStudent']);
    Route::post('admin/admin/addStudent', [StudentController::class,'insert']);
    Route::get('admin/admin/editStudent/{id}', [StudentController::class,'edit']);
    Route::put('admin/admin/editStudent/{id}', [StudentController::class,'update']);
    Route::get('admin/admin/delete/{id}', [StudentController::class,'delete']);
});
 
Route::group(['middleware'=>'student'],function () {
     Route::get('student/dashboard', [DashboardController::class,'dashboard']);
    

});
