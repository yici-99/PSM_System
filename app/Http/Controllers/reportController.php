<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class reportController extends Controller
{
    function studentList() //View Student List
    {
        $results = DB::table('psm1result')->join('student','psm1result.studentID','=','student.studentID')->select('psm1result.studentID','student.studentName')->get();
        return view('report.studentListS', ['datas'=> $results]);
    }


}
