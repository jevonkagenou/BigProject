<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApproveAdminController;
use App\Http\Controllers\DataEmployeeController;
use App\Http\Controllers\WorkScheduleController;
use App\Http\Controllers\ApprovalEmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SystemAdminController;
use App\Http\Controllers\ViewEmployeeController;
use App\Http\Controllers\RouteKaryawanController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DataPayrollController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PermitEmployeeController;
use App\Http\Controllers\DashboardEmployeeController;
use App\Http\Controllers\AnnualLeaveController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\SalaryConclusionController;
use App\Http\Controllers\SlipGajiKomponenController;
use App\Http\Controllers\StartPayrollController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ImportEmployeeController;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\EmployeePresence;

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
Route::middleware(['guest'])->group(function () {
    Route::get('/',[LandingPageController::class,'landingpage'])->name('Karyawan.landingpage');
    Route::get('/login',[LoginController::class,'login'])->name('login');
    Route::post('/loginuser',[LoginController::class,'loginuser'])->name('Loginuser');
    Route::get('/users/set-password/{user}', [PasswordController::class, 'setPassword'])->name('users.setPassword');
    Route::get('/users/update-password/{user}', [PasswordController::class, 'updatePassword'])->name('updatePassword');

});
Route::group(['middleware' => ['role:Admin']], function () {

    Route::get('/DashboardAdmin', [DashboardAdminController::class, 'DashboardAdmin'])->name('DashboardAdmin');
    Route::get('/AddEmployee', [RouteController::class, 'AddEmployee'])->name('AddEmployee');
    Route::get('/AddPaySlips', [RouteController::class, 'AddPayslips'])->name('AddPayslips');
    Route::get('/AdminReport', [RouteController::class, 'adminreport'])->name('adminreport');
    
    Route::get('/SalarySummary', [SalaryConclusionController::class, 'SalarySummary'])->name('SalarySummary');
    Route::get('/PermitLeaveAdmin', [RouteController::class, 'PermitLeaveAdmin'])->name('PermitLeaveAdmin');
    Route::get('/PermitLeaveEmployee', [RouteKaryawanController::class, 'PermitLeaveEmployee'])->name('PermitLeaveEmployee');

    Route::get('/CreateSlips', [SlipGajiKomponenController::class, 'CreateSlips'])->name('CreateSlips');
    Route::get('/AnnouncementUpdate', [RouteController::class, 'AnnouncementUpdate'])->name('AnnouncementUpdate');
    Route::get('/EmployeeAdmin', [RouteController::class, 'EmployeeAdmin'])->name('EmployeeAdmin');
    Route::get('/PayrolEmployee/{id}', [DataPayrollController::class, 'PayrolEmployee'])->name('PayrolEmployee');
    Route::get('/PresenceApproval', [RouteController::class, 'PresenceApproval'])->name('PresenceApproval');
    Route::get('/Presence', [RouteController::class, 'Presence'])->name('Presence');
    Route::get('/Setting', [RouteController::class, 'Setting'])->name('Setting');
    Route::get('/Company', [RouteController::class, 'Company'])->name('Company');
    Route::get('/PayrollSalarySlip', [SlipGajiKomponenController::class, 'PayrollSalarySlip'])->name('PayrollSalarySlip');
    Route::get('/AccountsUsers', [RouteController::class, 'AccountsUsers'])->name('AccountsUsers');
    Route::get('/StartPayroll', [StartPayrollController::class, 'StartPayroll'])->name('StartPayroll');
    Route::get('/Validation', [RouteController::class, 'Validation'])->name('Validation');
    Route::get('/Payroll', [PayrollController::class, 'Payroll'])->name('Payroll');
    Route::get('/PayrollStep', [RouteController::class, 'PayrollStep'])->name('PayrollStep');
    Route::get('/Detailkaryawan', [RouteController::class, 'Detailkaryawan'])->name('Detailkaryawan');
    Route::get('/SalaryAdjustment/{id}', [RouteController::class, 'SalaryAdjustment'])->name('SalaryAdjustment');
    Route::get('/AddAccount', [BankController::class, 'AddAccount'])->name('AddAccount');
    Route::post('/InsertAccount', [BankController::class, 'InsertAccount'])->name('InsertAccount');
    Route::get('/Schedule', [ViewEmployeeController::class, 'Schedule'])->name('Schedule');
    Route::get('/SummaryofComponentSalary', [RouteController::class, 'SummaryofComponentSalary'])->name('SummaryofComponentSalary');

    //Work Schedule
    Route::get('/WorkSchedule', [WorkScheduleController::class, 'WorkSchedule'])->name('WorkSchedule');
    Route::get('/tampiledit/{id}/edit', [WorkScheduleController::class, 'tampiledit'])->name('tampiledit.edit');
    Route::post('/updatejadwalkerja/{id}', [WorkScheduleController::class, 'updatejadwalkerja'])->name('updatejadwalkerja');
    Route::post('/updatejadwal', [WorkScheduleController::class, 'updatejadwal'])->name('updatejadwal');
    Route::get('/AddWorkSchedule', [WorkScheduleController::class, 'AddWorkSchedule'])->name('AddWorkSchedule');
    Route::post('/InsertWorkSchedule', [WorkScheduleController::class, 'InsertWorkSchedule'])->name('InsertWorkSchedule');
    Route::get('/deleteWorkSchedule/{id}', [WorkScheduleController::class, 'deleteWorkSchedule'])->name('deleteWorkSchedule');
    Route::get('/SalaryPaymentReport', [RouteController::class, 'SalaryPaymentReport'])->name('SalaryPaymentReport');

    // Data Payroll {{Id_User}}
    Route::post('/Data_Payroll', [DataPayrollController::class, 'Data_Payroll'])->name('Data_Payroll');
    Route::post('/Data_Salary/{id}', [DataPayrollController::class, 'Data_Salary'])->name('Data_Salary');
    Route::post('/UpdatePayrollStatus', [DataPayrollController::class, 'UpdatePayrollStatus'])->name('UpdatePayrollStatus');
    Route::get('/SelectedMonth', [SalaryConclusionController::class, 'SelectedMonth'])->name('SelectedMonth');
    Route::post('/GetData/{id}', [PayrollController::class, 'GetData'])->name('GetData');

    // Add Data Employee Route
    Route::get('/Employee/{id}', [DataEmployeeController::class, 'Employee'])->name('Employee');
    Route::get('/editemployee/{id}', [DataEmployeeController::class, 'editemployee'])->name('editemployee');
    Route::post('/Add_Employee', [DataEmployeeController::class, 'Add_Employee'])->name('Add_Employee');
    Route::post('/Update_Employee/{id}', [DataEmployeeController::class, 'Update_Employee'])->name('Update_Employee');
    Route::post('/Update_Image/{id}', [DataEmployeeController::class, 'Update_Image'])->name('Update_Image');
    Route::GET('/Delete_image/{id}', [DataEmployeeController::class, 'Delete_image'])->name('Delete_image');

    // Permit Employee and Approve
    Route::get('/Accepted/{user_id}', [ApproveAdminController::class, 'Accepted'])->name('Accepted');
    Route::get('/Rejected/{user_id}', [ApproveAdminController::class, 'Rejected'])->name('Rejected');

    Route::get('/SettingSchedule', [RouteController::class, 'SettingSchedule'])->name('SettingSchedule');
    Route::get('/DetileSchedule', [RouteController::class, 'DetileSchedule'])->name('DetileSchedule');
    Route::get('/AnnualLeave', [RouteController::class, 'AnnualLeave'])->name('AnnualLeave');
    Route::get('/EditSchedule', [RouteController::class, 'EditSchedule'])->name('EditSchedule');
    Route::get('/blank/{id}', [RouteController::class, 'showBlankImageDocument']);
    Route::get('/file/{id}', [RouteController::class, 'DownloadFile']);
    Route::get('/DetailSalary', [SalaryConclusionController::class, 'DetailSalary'])->name('DetailSalary.');

    // pengummuman
    Route::get('/Announcement', [AnnouncementController::class, 'index'])->name('Announcement');
    Route::post('/Createp', [AnnouncementController::class, 'Create'])->name('Createp');
    route::post('/update/{id}', [AnnouncementController::class, 'update'])->name('update');
    route::get('/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('destroy');
    route::get('/delete2/{id}', [SystemAdminController  ::class, 'delete2'])->name('delete2');
    Route::get('/search', [AnnouncementController::class, 'search'])->name('search');
    Route::post('/Create', [AnnualLeaveController::class, 'Create'])->name('Create');

    Route::get('/ProfilAdmin/{id}', [SystemAdminController::class, 'ProfilAdmin'])->name('ProfilAdmin');
    Route::post('/updateProfile/{id}', [SystemAdminController::class, 'updateProfile'])->name('ProfilAdmin.updateProfile');
    Route::post('/updateFotoadmin/{id}', [SystemAdminController::class, 'updateFotoadmin'])->name('ProfilAdmin.updateFotoadmin');
    Route::get('/delete/{id}', [SystemAdminController::class, 'delete'])->name('delete');
    // Route::get('/delete2/{id}', [SystemAdminController::class, 'delete'])->name('delete2');/

    Route::post('/updategambarProfile/{id}', [SystemAdminController::class, 'updategambarProfile'])->name('ProfilAdmin.updategambarProfile');
    Route::get('/gantipassword', [SystemAdminController::class, 'gantipassword']);
    Route::post('/changePassword/{id}', [SystemAdminController::class, 'changePassword']);
    Route::post('/filter', [SystemAdminController::class, 'filter'])->name('filter');

});
    Route::get('/DashboardEmployee', [DashboardEmployeeController::class, 'DashboardEmployee'])->name('DashboardEmployee')->middleware('role:Karyawan');
    Route::get('/SalaryEmployee', [ViewEmployeeController::class, 'SalaryEmployee'])->name('SalaryEmployee');
    // Approval Employee
    Route::get('/ApprovalEmployee', [ApprovalEmployeeController::class, 'ApprovalEmployee'])->name('ApprovalEmployee');
    Route::get('/EmployeePresence', [ViewEmployeeController::class, 'EmployeePresence'])->name('EmployeePresence');
    Route::get('/PermitEmployee', [ViewEmployeeController::class, 'PermitEmployee'])->name('PermitEmployee');
    Route::get('/CompanyEmployee', [ViewEmployeeController::class, 'CompanyEmployee'])->name('CompanyEmployee');
    Route::get('/Calendar', [ViewEmployeeController::class, 'Calendar'])->name('Calendar');

    Route::post('/Add_Permit', [PermitEmployeeController::class, 'Add_Permit'])->name('Add_Permit');
    Route::post('PresenceCreate/{jenis}', [EmployeePresence::class, 'presence'])->name('PresenceCreate');


    Route::get('/ProfileEmployee/{id}', [SystemAdminController::class, 'ProfileEmployee'])->name('ProfileEmployee');
    Route::post('/updateProfileEmployee/{id}', [SystemAdminController::class, 'updateProfileEmployee'])->name('ProfileEmployee.updateProfileEmployee');
    Route::post('/updateFotoEmployee/{id}', [SystemAdminController::class, 'updateFotoEmployee'])->name('ProfilAdmin.updateFotoEmployee');

    Route::get('/gantipasswordEmployee', [SystemAdminController::class, 'gantipasswordEmployee']);
    Route::post('/changePasswordEmployee/{id}', [SystemAdminController::class, 'changePasswordEmployee']);


Route::middleware(['auth'])->group(function () {
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

});
Route::post('/importData', [ImportEmployeeController::class, 'import'])->name('importData');
Route::post('/importPayroll', [ImportEmployeeController::class, 'import2'])->name('importPayroll');
Route::get('/exportpdf', [ImportEmployeeController::class, 'exportpdf'])->name('exportpdf');
Route::get('/ExportEmployee', [ImportEmployeeController::class, 'Export'])->name('ExportEmployee');
Route::get('/SummaryofcomponentsalaryExport', [ImportEmployeeController::class, 'Export2'])->name('SummaryofcomponentsalaryExport');
