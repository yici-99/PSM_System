<?php

use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

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