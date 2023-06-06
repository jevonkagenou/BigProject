<?php

use App\Http\Controllers\ViewEmployeeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/DashboardEmployee', [ViewEmployeeController::class, 'DashboardEmployee'])->name('DashboardEmployee');
Route::get('/ApprovalEmployee', [ViewEmployeeController::class, 'ApprovalEmployee'])->name('ApprovalEmployee');
Route::get('/EmployeePresence', [ViewEmployeeController::class, 'EmployeePresence'])->name('EmployeePresence');
Route::get('/PermitEmployee', [ViewEmployeeController::class, 'PermitEmployee'])->name('PermitEmployee');

