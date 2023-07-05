<?php
use App\Http\Controllers\ApproveAdminController;


use App\Http\Controllers\DataEmployeeController;
use App\Http\Controllers\WorkScheduleController;
use App\Http\Controllers\ApprovalEmployeeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ViewEmployeeController;

use App\Http\Controllers\RouteKaryawanController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DataPayrollController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PermitEmployeeController;
use App\Http\Controllers\DashboardEmployeeController;
use App\Http\Controllers\AnnualLeaveController;



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

Route::get('/login',[LoginController::class,'login'])->name('Login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/loginuser',[LoginController::class,'loginuser'])->name('Loginuser');
Route::get('/landing-page',[LandingPageController::class,'landingpage'])->name('Karyawan.landingpage');

// Admin Route
Route::get('/DashboardEmployee', [ViewEmployeeController::class, 'DashboardEmployee'])->name('DashboardEmployee');
// Approval Employee
Route::get('/ApprovalEmployee', [ApprovalEmployeeController::class, 'ApprovalEmployee'])->name('ApprovalEmployee');
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
//Work Schedule
Route::get('/WorkSchedule', [WorkScheduleController::class, 'WorkSchedule'])->name('WorkSchedule');
Route::get('/tampiledit/{id}/edit', [WorkScheduleController::class, 'tampiledit'])->name('tampiledit.edit');
Route::post('/updatejadwalkerja/{id}', [WorkScheduleController::class, 'updatejadwalkerja'])->name('updatejadwalkerja');
Route::post('/updatejadwal', [WorkScheduleController::class, 'updatejadwal'])->name('updatejadwal');

Route::get('/deleteWorkSchedule/{id}', [WorkScheduleController::class, 'deleteWorkSchedule'])->name('deleteWorkSchedule');




Route::get('/SalaryPaymentReport', [RouteController::class, 'SalaryPaymentReport'])->name('SalaryPaymentReport');

Route::get('/AnnouncementUpdate', [RouteController::class, 'AnnouncementUpdate'])->name('AnnouncementUpdate');
Route::get('/EmployeeAdmin', [RouteController::class, 'EmployeeAdmin'])->name('EmployeeAdmin');
Route::get('/PayrolEmployee/{id}', [DataPayrollController::class, 'PayrolEmployee'])->name('PayrolEmployee');
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
Route::get('/Employee/{id}', [DataEmployeeController::class, 'Employee'])->name('Employee');
Route::get('/SalaryAdjustment', [RouteController::class, 'SalaryAdjustment'])->name('SalaryAdjustment');
Route::get('/AddAccount', [RouteController::class, 'AddAccount'])->name('AddAccount');
Route::get('/ProfilAdmin', [RouteController::class, 'ProfilAdmin'])->name('ProfilAdmin');
Route::get('/AddWorkSchedule', [RouteController::class, 'AddWorkSchedule'])->name('AddWorkSchedule');
Route::get('/ProfileEmployee', [ViewEmployeeController::class, 'ProfileEmployee'])->name('ProfileEmployee');
Route::get('/Schedule', [ViewEmployeeController::class, 'Schedule'])->name('Schedule');
Route::get('/SummaryofComponentSalary', [RouteController::class, 'SummaryofComponentSalary'])->name('SummaryofComponentSalary');


Route::get('/SettingSchedule', [RouteController::class, 'SettingSchedule'])->name('SettingSchedule');
Route::get('/DetileSchedule', [RouteController::class, 'DetileSchedule'])->name('DetileSchedule');
Route::get('/AnnualLeave', [RouteController::class, 'AnnualLeave'])->name('AnnualLeave');
Route::get('/EditSchedule', [RouteController::class, 'EditSchedule'])->name('EditSchedule');
Route::get('/blank/{id}', [RouteController::class, 'showBlankImageDocument']);
Route::get('/file/{id}', [RouteController::class, 'DownloadFile']);


// Add Data Employee Route
Route::post('/Add_Employee', [DataEmployeeController::class, 'Add_Employee'])->name('Add_Employee');
Route::post('/Update_Image', [DataEmployeeController::class, 'Update_Image'])->name('Update_Image');
Route::post('/Delete_Image', [DataEmployeeController::class, 'Delete_Image'])->name('Delete_Image');


// Permit Employee and Approve
Route::get('/Accepted/{user_id}', [ApproveAdminController::class, 'Accepted'])->name('Accepted');
Route::get('/Rejected/{user_id}', [ApproveAdminController::class, 'Rejected'])->name('Rejected');
Route::post('/Add_Permit', [PermitEmployeeController::class, 'Add_Permit'])->name('Add_Permit');

// Data Payroll {{Id_User}}
Route::post('/Data_Payroll', [DataPayrollController::class, 'Data_Payroll'])->name('Data_Payroll');
// pengummuman
Route::get('/Announcement', [AnnouncementController::class, 'index'])->name('Announcement');
Route::post('/Createp', [AnnouncementController::class, 'Create'])->name('Createp');
route::post('/update/{id}', [AnnouncementController::class, 'update'])->name('update');
route::get('/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('destroy');

//dashboard employee
route::get('/DashboardEmployee', [DashboardEmployeeController::class, 'DashboardEmployee'])->name('DashboardEmployee');

//Cuti Tahunan
Route::post('/Create', [AnnualLeaveController::class, 'Create'])->name('Create');

