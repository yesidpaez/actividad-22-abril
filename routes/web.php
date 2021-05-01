<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
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


Route::get('companies',[CompaniesController::class, 'index']);
Route::get('companies/create',[CompaniesController::class, 'create']);
Route::post('companies',[CompaniesController::class, 'store']);
Route::get('companies/{id}',[CompaniesController::class, 'show']);
Route::get('companies/edit/{id}',[CompaniesController::class, 'edit']);
Route::delete('companies/{id}',[CompaniesController::class, 'destroy']);
Route::put('companies/{id}',[CompaniesController::class, 'update']);
Route::get('employees',[CompaniesController::class, 'index']);

Route::redirect('/' , 'employees');

Route::get('employees',[EmployeesController::class, 'index']);
Route::get('employees/create',[EmployeesController::class, 'create']);
Route::post('employees',[EmployeesController::class, 'store']);
Route::get('employees/{id}',[EmployeesController::class, 'show']);
Route::get('employees/edit/{id}' , [EmployeesController::class, 'edit']);
Route::delete('employees/{id}',[EmployeesController::class, 'destroy']);
Route::put('employees/{id}',[EmployeesController::class, 'update']);
Route::get('companies',[CompaniesController::class, 'index']);



