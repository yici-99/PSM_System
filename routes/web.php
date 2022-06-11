<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\reportController;
use Illuminate\Support\Facades\Mail;
use App\Models\Deadline;
use App\Http\Controllers\CarnivalController;

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

//Main

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masterS', function () {

    return view('masterS');
});

Route::get('/masterStu', function () {
    return view('masterStu');
});

Route::get('/masterC', function () {
    return view('masterC');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Manage Evaluation
Route::get('/svMenu', function () {

    $deadlinePsm1 = Deadline::select(['deadlines.*'])
        ->where('psmType', '=', 'PSM 1')
        ->latest('created_at')->first();

    $deadlinePsm2 = Deadline::select(['deadlines.*'])
        ->where('psmType', '=', 'PSM 2')
        ->latest('created_at')->first();

    $deadlinePta = Deadline::select(['deadlines.*'])
        ->where('psmType', '=', 'PTA')
        ->latest('created_at')->first();

    return view('/evaluation/svMenu', [
        'deadlinePsm1' => $deadlinePsm1,
        'deadlinePsm2' => $deadlinePsm2,
        'deadlinePta' => $deadlinePta,
    ]);
});

Route::get('/svView', [EvaluationController::class, 'svView']);
Route::get('/deadline', [EvaluationController::class, 'deadline']);
Route::post('/deadline', [EvaluationController::class, 'storeDeadline']);
Route::get('/svEdit/{resultID}/{psmType}', [EvaluationController::class, 'svEdit']);
Route::post('/updateSvMarks/{resultID}/{psmType}', [EvaluationController::class, 'updateSvMarks']);

Route::get('/evView', [EvaluationController::class, 'evView']);
Route::get('/evEdit/{resultID}/{psmType}', [EvaluationController::class, 'evEdit']);
Route::post('/updateEvMarks/{resultID}/{psmType}', [EvaluationController::class, 'updateEvMarks']);

/*Route::get('/', function(){

    Mail::send(new App\Mail\DeadlineReminder());

    return view('welcome');
});*/

//Generate Top 20
Route::get('/main', function () {
    return view('ResultMain');
});

//Generate Report
Route::get('/reportMainC', function () {
    return view('/report/reportMainC');
});

Route::get('/studentListC', function () {
    return view('/report/studentListC');
});

Route::get('/studentListS', function () {
    return view('/report/studentListS');
});

Route::get('/reportOverview', function () {
    return view('/report/reportOverview');
});

Route::get('/reportC', function () {
    return view('/report/reportC');
});

Route::get('/reportS', function () {
    return view('/report/reportS');
});

Route::get('/reportStu', function () {
    return view('/report/reportStu');
});

Route::get('/studentListS', [reportController::class, 'viewList1']);
Route::get('/studentListC', [reportController::class, 'viewList2']);
Route::get('/reportStu/{resultID}/{psmType}', [reportController::class, 'viewdata']);

Route::get('/reportOverview', [reportController::class, 'calctotal']);

require __DIR__ . '/auth.php';

//Manage Student
Route::get('/searcsupervisor', function () {
    return view('/Student/searchsupervisor');
});

Route::get('/editprofile', function () {
    return view('/Student/editprofile');
});
Route::get('/editprofile', function () {
    return view('/Student/viewprofile');
});



//Manage Coordinator
Route::get('/Cmainpage', function () {
    return view('/Coordinator/Cmainpage');
});
Route::get('/psmprofile', function () {
    return view('/Coordinator/psmprofile');
});

//Manage Supervisor
Route::get('/smainpage', function () {

    $deadlinePsm1 = Deadline::select(['deadlines.*'])
        ->where('psmType', '=', 'PSM 1')
        ->latest('created_at')->first();

    $deadlinePsm2 = Deadline::select(['deadlines.*'])
        ->where('psmType', '=', 'PSM 2')
        ->latest('created_at')->first();

    $deadlinePta = Deadline::select(['deadlines.*'])
        ->where('psmType', '=', 'PTA')
        ->latest('created_at')->first();

    return view('/supervisor/smainpage', [
        'deadlinePsm1' => $deadlinePsm1,
        'deadlinePsm2' => $deadlinePsm2,
        'deadlinePta' => $deadlinePta,
    ]);
});

Route::get('/carnival_evaluation', [CarnivalController::class, 'index'])->name('CarnivalEvaluation');
Route::post('/carnival_evaluation/create', [CarnivalController::class, 'store'])->name('CarnivalEvaluation.store');
Route::get('/carnival_evaluation/create', [CarnivalController::class, 'create'])->name('CarnivalEvaluation.create');
Route::get('/carnival_evaluation/edit/{carnival_evaluation}', [CarnivalController::class, 'edit'])->name('CarnivalEvaluation.edit');
Route::put('/carnival_evaluation/edit/{carnival_evaluation}', [CarnivalController::class, 'update'])->name('CarnivalEvaluation.update');
