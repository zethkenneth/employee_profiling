<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\HomepageController;
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



Route::get('/',[
    HomepageController::class, 'index'
]);


//EMPLOYEES ROUTES 
Route::get('/employee',[
    EmployeeController::class, 'index'
]);

Route::get('/employee/create',[
    EmployeeController::class, 'create'
]);

Route::post('/employee/store',[
    EmployeeController::class, 'store'
]);

Route::get('/employee/{id}',[
    EmployeeController::class, 'edit'
]);

Route::post('/employee/update',[
    EmployeeController::class, 'update'
]);

Route::get('/employee/delete/{id}',[
    EmployeeController::class, 'destroy'
]);





//POSITIONS ROUTES 
Route::get('/position',[
    PositionController::class, 'index'
]);

Route::get('/position/create',[
    PositionController::class, 'create'
]);

Route::post('/position/store',[
    PositionController::class, 'store'
]);

Route::get('/position/{id}',[
    PositionController::class, 'edit'
]);

Route::post('/position/update',[
    PositionController::class, 'update'
]);

Route::get('/position/delete/{id}',[
    PositionController::class, 'destroy'
]);


//DEPARTMENTS ROUTES 
Route::get('/department',[  
    DepartmentController::class, 'index'
]);

Route::get('/department/create',[
    DepartmentController::class, 'create'
]);

Route::post('/department/store',[
    DepartmentController::class, 'store'
]);

Route::get('/department/{id}',[
    DepartmentController::class, 'edit'
]);

Route::post('/department/update',[
    DepartmentController::class, 'update'
]);

Route::get('/department/delete/{id}',[
    DepartmentController::class, 'destroy'
]);

