<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ViewEmployeeController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\RouteKaryawanController;
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

// Admin Route
Route::get('/DashboardEmployee', [ViewEmployeeController::class, 'DashboardEmployee'])->name('DashboardEmployee');
Route::get('/ApprovalEmployee', [ViewEmployeeController::class, 'ApprovalEmployee'])->name('ApprovalEmployee');
Route::get('/EmployeePresence', [ViewEmployeeController::class, 'EmployeePresence'])->name('EmployeePresence');
Route::get('/PermitEmployee', [ViewEmployeeController::class, 'PermitEmployee'])->name('PermitEmployee');
Route::get('/CompanyEmployee', [ViewEmployeeController::class, 'CompanyEmployee'])->name('CompanyEmployee');
Route::get('/SalaryEmployee', [ViewEmployeeController::class, 'SalaryEmployee'])->name('SalaryEmployee');
Route::get('/Calendar', [ViewEmployeeController::class, 'Calendar'])->name('Calendar');

// Karyawan Route
// Route::view('/', 'Pengaturan.Perusahaan');
Route::get('/', [DashboardAdminController::class, 'DashboardAdmin'])->name('DashboardAdmin');
Route::get('/AddEmployee', [RouteController::class, 'AddEmployee'])->name('AddEmployee');
Route::get('/AddPaySlips', [RouteController::class, 'AddPayslips'])->name('AddPayslips');
Route::get('/AdminReport', [RouteController::class, 'adminreport'])->name('adminreport');
Route::get('/ApprovalAdmin', [RouteController::class, 'ApprovalAdmin'])->name('ApprovalAdmin');
Route::get('/SalarySummary', [RouteController::class, 'SalarySummary'])->name('SalarySummary');
Route::get('/PermitLeaveAdmin', [RouteController::class, 'PermitLeaveAdmin'])->name('PermitLeaveAdmin');
Route::get('/PermitLeaveEmployee', [RouteKaryawanController::class, 'PermitLeaveEmployee'])->name('PermitLeaveEmployee');
Route::get('/WorkSchedule', [RouteController::class, 'WorkSchedule'])->name('WorkSchedule');
Route::get('/SalaryPaymentReport', [RouteController::class, 'SalaryPaymentReport'])->name('SalaryPaymentReport');
Route::get('/Announcement', [RouteController::class, 'Announcement'])->name('Announcement');
Route::get('/EmployeeAdmin', [RouteController::class, 'EmployeeAdmin'])->name('EmployeeAdmin');
Route::get('/PayrolEmployee', [RouteController::class, 'PayrolEmployee'])->name('PayrolEmployee');
Route::get('/PresenceApproval', [RouteController::class, 'PresenceApproval'])->name('PresenceApproval');
Route::get('/Presence', [RouteController::class, 'Presence'])->name('Presence');
Route::get('/Setting', [RouteController::class, 'Setting'])->name('Setting');
Route::get('/Company', [RouteController::class, 'Company'])->name('Company');
Route::get('/PayrollSalarySlip', [RouteController::class, 'PayrollSalarySlip'])->name('PayrollSalarySlip');
Route::get('/AccountsUsers', [RouteController::class, 'AccountsUsers'])->name('AccountsUsers');
Route::get('/StartPayroll', [RouteController::class, 'StartPayroll'])->name('StartPayroll');
Route::get('/Validation', [RouteController::class, 'Validation'])->name('Validation');
Route::get('/Payroll', [RouteController::class, 'Payroll'])->name('Payroll');
Route::get('/PayrollStep', [RouteController::class, 'PayrollStep'])->name('PayrollStep');
Route::get('/EmployeeAdmin', [RouteController::class, 'EmployeeAdmin'])->name('EmployeeAdmin');
Route::get('/Detailkaryawan', [RouteController::class, 'Detailkaryawan'])->name('Detailkaryawan');
Route::get('/Employee', [RouteController::class, 'Employee'])->name('Employee');
Route::get('/SalaryAdjustment', [RouteController::class, 'SalaryAdjustment'])->name('SalaryAdjustment');
Route::get('/AddAccount', [RouteController::class, 'AddAccount'])->name('AddAccount');
Route::get('/ProfilAdmin', [RouteController::class, 'ProfilAdmin'])->name('ProfilAdmin');
Route::get('/AddWorkSchedule', [RouteController::class, 'AddWorkSchedule'])->name('AddWorkSchedule');
Route::get('/ProfileEmployee', [ViewEmployeeController::class, 'ProfileEmployee'])->name('ProfileEmployee');
Route::get('/Schedule', [ViewEmployeeController::class, 'Schedule'])->name('Schedule');
Route::get('/SummaryofComponentSalary', [RouteController::class, 'SummaryofComponentSalary'])->name('SummaryofComponentSalary');
Route::get('/landing-page',[LandingPageController::class,'landingpage'])->name('Karyawan.landingpage');


Route::get('/SettingSchedule', [RouteController::class, 'SettingSchedule'])->name('SettingSchedule');
Route::get('/DetileSchedule', [RouteController::class, 'DetileSchedule'])->name('DetileSchedule');
Route::get('/AnnualLeave', [RouteController::class, 'AnnualLeave'])->name('AnnualLeave');
Route::get('/EditSchedule', [RouteController::class, 'EditSchedule'])->name('EditSchedule');
