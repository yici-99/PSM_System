<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\reportController;

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
Route::get('/evMenu', function () {
    return view('/evaluation/evMenu');
});

Route::get('/svView', function () {
    return view('/evaluation/svView');
});

Route::get('/deadline', [EvaluationController::class, 'deadline']);
Route::post('/deadline', [EvaluationController::class, 'storeDeadline']);
Route::get('/svEdit', [EvaluationController::class, 'svEdit']);

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
Route::get('/studentListS', [reportController::class,'viewListS']);
Route::get('/studentListC', [reportController::class,'viewListC']);
Route::get('/reportS/{resultID}/{psmType}', [reportController::class,'viewdataS']);
Route::get('/reportC/{resultID}/{psmType}', [reportController::class,'viewdataC']);
Route::get('/reportOverview', [reportController::class,'calctotal']);

require __DIR__.'/auth.php';

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
    return view('/supervisor/smainpage');
});