<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regValidation;

Route::get('/', function () {
    return view('welcome');
});

//for multipurpose barangay clearance
Route::post('saveBrgyClearance', [regValidation::class, 'saveBrgyClearance'])->name('regValidation.saveBrgyClearance');
Route::get('/dashboards/secretariesDb/dbBrgyClearance', [regValidation::class, 'barangayClearance']);
Route::get('/dashboards/secretariesDb/brgyClearance', [regValidation::class, 'viewBrgyClearance']);
Route::put('/upBrgyClearance/{id}', [regValidation::class, 'updateBrgyClearance'])->name('updateBrgyClearance');
Route::post('insertBrgyClearanceransaction', [regValidation::class, 'insertBrgyClearanceransaction'])->name('regValidation.insertBrgyClearanceransaction');
Route::post('/reject-clearance', [regValidation::class, 'rejectClearance']);
Route::post('/update-bcl-status', [regValidation::class, 'updateBclStatus']);
Route::get('/residentClearance/{id}', [regValidation::class, 'getResidentClearance']);



//for business barangay clearance
Route::post('saveBusinessClearance', [regValidation::class, 'saveBusinessClearance'])->name('regValidation.saveBusinessClearance');
Route::get('/dashboards/secretariesDb/dbBusinessPermit', [regValidation::class, 'businessPermit']);
Route::get('/dashboards/secretariesDb/businessClearance', [regValidation::class, 'viewBusinessClearance']);
Route::post('insertBusiTransaction', [regValidation::class, 'insertBusiTransaction'])->name('regValidation.insertBusiTransaction');
Route::put('/businessCertificate/{id}', [regValidation::class, 'updateBusinessTransaction'])->name('updateBusinessTransaction');
Route::post('/reject-business', [regValidation::class, 'rejectBusiness']);
Route::post('/update-bc-status', [regValidation::class, 'updateBcStatus']);
Route::get('/residentBusiness/{id}', [regValidation::class, 'getResidentBusiness']);

// for certificates
Route::post('saveCertificate', [regValidation::class, 'saveCertificate'])->name('regValidation.saveCertificate');
Route::get('/dashboards/secretariesDb/certIndigency', [regValidation::class, 'viewCertIndigency']);
Route::post('insertCertTransaction', [regValidation::class, 'insertCertTransaction'])->name('regValidation.insertCertTransaction');
Route::get('/resident/{id}', [regValidation::class, 'getResidentData'])->name('resident.data');
Route::put('/certificate/{id}', [regValidation::class, 'updateTransaction'])->name('updateTransaction');
Route::post('/update-cert-status', [regValidation::class, 'updateStatus']);
Route::post('/reject-certificate', [regValidation::class, 'rejectCertificate']);
Route::get('/dashboards/secretariesDb/certification', [regValidation::class, 'viewCertification']);
Route::get('/dashboards/secretariesDb/brgyCertification', [regValidation::class, 'viewBrgyCertification']);
Route::get('/dashboards/secretariesDb/goodMoral', [regValidation::class, 'viewGoodMoral']);
Route::get('/residentCertificate/{id}', [regValidation::class, 'getResidentCertificate']);


// for complaints
Route::post('saveComplaints', [regValidation::class, 'saveComplaints'])->name('regValidation.saveComplaints');
Route::get('/dashboards/secretariesDb/dbBlotter', [regValidation::class, 'dbBlotter']);
Route::get('/residentComplaint/{id}', [regValidation::class, 'getResidentComplaint'])->name('resident.data');
Route::get('/dashboards/secretariesDb/brgyBlotter', [regValidation::class, 'viewBrgyBlotter']);
Route::put('/upBlotter/{id}', [regValidation::class, 'updateBlotter'])->name('updateBlotter');
Route::post('/update-blotter-status', [regValidation::class, 'updateBlotterStatus']);
Route::post('/reject-blotter', [regValidation::class, 'rejectBlotter']);
Route::get('/residentBlotter/{id}', [regValidation::class, 'getResidentBlotter']);

// for residents
Route::post('saveResidents', [regValidation::class, 'saveResidents'])->name('regValidation.saveResidents');
Route::get('displayResident', [regValidation::class, 'displayResident'])->name('regValidation.displayResident');
Route::get('edit-resident/{id}', [regValidation::class, 'editResident']);
Route::post('/update-resident/{id}', [regValidation::class, 'updateResident']);
Route::get('dbResidents', [regValidation::class, 'dbResidents'])->name('dbResidents');
Route::get('/residentTraceTran', [regValidation::class, 'traceResidents'])->name('residentTraceTran');
Route::post('dbResidents', [regValidation::class, 'traceTransaction'])->name('traceTransaction');
Route::post('/cancelBlotter', [regValidation::class, 'cancelBlotter'])->name('cancelBlotter');
Route::post('/cancelCertificate', [regValidation::class, 'cancelCertificate'])->name('cancelCertificate');
Route::post('/cancelClearance', [regValidation::class, 'cancelClearance'])->name('cancelClearance');
Route::post('/cancelBusiness', [regValidation::class, 'cancelBusiness'])->name('cancelBusiness');
Route::get('/schedule', [regValidation::class, 'getSchedule']);
Route::get('/officials', [regValidation::class, 'getOfficialData'])->name('official.data');



// for employees
Route::get('login', [regValidation::class, 'log'])->name('login');
Route::get('register', [regValidation::class, 'reg'])->name('register');
Route::get('edit-employee/{id}', [regValidation::class, 'editEmployee']);
Route::post('/update-employee/{id}', [regValidation::class, 'updateEmployee']);
Route::get('/privateSchedules', [regValidation::class, 'getPrivateSchedule']);
Route::get('/dashboards/employeeProfile', [regValidation::class, 'employeeProfile']);
Route::post('/change-password/{id}', [regValidation::class, 'changePassword']);


//FOR SECRETARY
Route::get('/dashboards/dbSecretary', [regValidation::class, 'dashboard']);
//RESIDENT VIEWING
Route::get('/dashboards/secretariesDb/residentRec', [regValidation::class, 'residentsRec']);
Route::get('/dashboards/secretariesDb/dbviewResident', [regValidation::class, 'dbviewResident']);
//CERTIFICATE VIEWING
Route::get('/dashboards/secretariesDb/dBCert', [regValidation::class, 'barangayCert']);
//PUROK VIEWING
Route::get('/dashboards/secretariesDb/purokList', [regValidation::class, 'dashboardPur']);
//REQUESTED DOCUMENTS
Route::get('/dashboards/secretariesDb/requestedDocs', [regValidation::class, 'requestedDoc']);
//PUROK LIST
Route::get('/fetch-purok-residents', [regValidation::class, 'fetchPurokResidents']);
Route::get('/purok-counts', [regValidation::class, 'getPurokCounts']);

//FOR SYSTEM ADMIN
Route::get('/dashboards/systemAdmin', [regValidation::class, 'dbAdmin']);
Route::post('/update-employees/{id}', [regValidation::class, 'update'])->name('employee.update');
Route::post('/archive-employee', [regValidation::class, 'archiveEmployee'])->name('employee.archive');
Route::post('/activate-employee', [regValidation::class, 'activateEmployee'])->name('employee.activate');

//FOR HEALTH WORKER
Route::get('/dashboards/dbHealthWorker', [regValidation::class, 'dashboardHW']);
Route::get('dashboards/healthWorkerDb/dailyServiceRecord', [regValidation::class, 'dailyServiceRecord']);
Route::get('dashboards/healthWorkerDb/individualClientReport', [regValidation::class, 'indiClientReport']);
Route::get('dashboards/healthWorkerDb/optDeworming', [regValidation::class, 'optDeworming']);
Route::get('dashboards/healthWorkerDb/riskAssessment', [regValidation::class, 'riskAssessment']);
Route::get('dashboards/healthWorkerDb/dstb', [regValidation::class, 'dstb']);
Route::get('dashboards/healthWorkerDb/familyPlanning', [regValidation::class, 'familyPlanning']);
Route::get('dashboards/healthWorkerDb/rhu', [regValidation::class, 'rhu']);
Route::get('dashboards/healthWorkerDb/dengue', [regValidation::class, 'dengue']);


Route::get('dashboards/healthWorkerDb/medicine', [regValidation::class, 'medicineRecord']);

//FOR CAPTAIN
Route::get('/dashboards/dbBrgyCap', [regValidation::class, 'dashboardCap']);
Route::get('/dashboard/yearly-data/{type}', [regValidation::class, 'getYearlyGraphData']);
Route::get('/dashboard/monthly-data/{type}', [regValidation::class, 'getMonthlyGraphData']);
Route::get('/dashboards/captainDb/residentRecCap', [regValidation::class, 'residentsRecCap']);
Route::get('/dashboards/captainDb/dashboardCapCert', [regValidation::class, 'dashboardCapCert']);
Route::get('/dashboards/captainDb/dashboardCapClearance', [regValidation::class, 'dashboardCapClearance']);
Route::get('/dashboards/captainDb/dashboardCapBusiness', [regValidation::class, 'dashboardCapBusiness']);
Route::get('/dashboards/captainDb/dashboardCapBlotter', [regValidation::class, 'dashboardCapBlotter']);
Route::get('/dashboards/captainDb/dashboardCapPur', [regValidation::class, 'dashboardCapPur']);
Route::get('/dashboards/captainDb/dashboardCapRevenue', [regValidation::class, 'dashboardCapRevenue']);
Route::get('/dashboards/captainDb/viewResidentDetails', [regValidation::class, 'viewResidentDetails']);

//FOR TREASURER
Route::get('/dashboards/dbTreasurer', [regValidation::class, 'dbTreasurer']);
Route::get('/dashboards/treasurerDb/transactionTreasurer', [regValidation::class, 'transactionTreasurer']);
Route::post('/submit-total-revenue', [regValidation::class, 'submitTotalRevenue'])->name('submitTotalRevenue');

Route::get('logout', [regValidation::class, 'logout'])->name('regValidation.logout');
Route::post('save', [regValidation::class, 'save'])->name('regValidation.save');
Route::post('check', [regValidation::class, 'check'])->name('regValidation.check');
Route::post('resident/archive', [regValidation::class, 'archiveResident'])->name('resident.archive');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
