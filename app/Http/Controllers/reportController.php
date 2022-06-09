<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class reportController extends Controller
{
    public function viewListS(Request $request) //View Student List
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $results1 = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where("psm1result.studentID", "LIKE", '%'.$search.'%')
            ->get();
            $results2 = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where("psm2result.studentID", "LIKE", '%'.$search.'%')
            ->get();
            $results3 = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where("ptaresult.studentID", "LIKE", '%'.$search.'%')
            ->get();
        }else{
            $results1 = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->get();
            $results2 = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->get();
            $results3 = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->get(); 
        }
           
    
        return view('report.studentListS', ['results1'=> $results1,'results2'=> $results2,'results3'=> $results3,'search'=> $search]);
    }

    public function viewListC(Request $request) //View Student List
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $results1 = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where("psm1result.studentID", "LIKE", '%'.$search.'%')
            ->get();
            $results2 = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where("psm2result.studentID", "LIKE", '%'.$search.'%')
            ->get();
            $results3 = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where("ptaresult.studentID", "LIKE", '%'.$search.'%')
            ->get();
        }else{
            $results1 = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->get();
            $results2 = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->get();
            $results3 = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->get(); 
        }
           
    
        return view('report.studentListC', ['results1'=> $results1,'results2'=> $results2,'results3'=> $results3,'search'=> $search]);
    }

    public function viewdataS($resultID, $psmType){ //View student report details
        if($psmType == 'psm1'){
            $result = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where('psm1result.resultID', '=', $resultID)
            ->first();
        }
        elseif($psmType == 'psm2'){
            $result = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where('psm2result.resultID', '=', $resultID)
            ->first();
        }
        else{
            $result = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where('ptaresult.resultID', '=', $resultID)
            ->first();
        }
         return view('report.reportS', ['data'=> $result]);
    }

    public function viewdataC($resultID, $psmType){ //View student report details
        if($psmType == 'psm1'){
            $result = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where('psm1result.resultID', '=', $resultID)
            ->first();
        }
        elseif($psmType == 'psm2'){
            $result = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where('psm2result.resultID', '=', $resultID)
            ->first();
        }
        else{
            $result = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where('ptaresult.resultID', '=', $resultID)
            ->first();
        }
         return view('report.reportC', ['data'=> $result]);
    }

    public function calctotal(Request $request){
        $psmType = $request['psmType'];
        if($psmType == 'psm1'){
            $A = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where('psm1result.grade', '=', 'A')
            ->count();
            $B = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where('psm1result.grade', '=', 'B')
            ->count();
            $C = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where('psm1result.grade', '=', 'C')
            ->count();
            $D = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where('psm1result.grade', '=', 'D')
            ->count();
            $E = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where('psm1result.grade', '=', 'E')
            ->count();
            $F = DB::table('psm1result')
            ->join('students','psm1result.studentID','=','students.studentID')
            ->select('psm1result.*','students.*')
            ->where('psm1result.grade', '=', 'F')
            ->count();
        }
        elseif($psmType == 'psm2'){
            $A = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where('psm2result.grade', '=', 'A')
            ->count();
            $B = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where('psm2result.grade', '=', 'B')
            ->count();
            $C = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where('psm2result.grade', '=', 'C')
            ->count();
            $D = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where('psm2result.grade', '=', 'D')
            ->count();
            $E = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where('psm2result.grade', '=', 'E')
            ->count();
            $F = DB::table('psm2result')
            ->join('students','psm2result.studentID','=','students.studentID')
            ->select('psm2result.*','students.*')
            ->where('psm2result.grade', '=', 'F')
            ->count();
        }else{
            $A = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where('ptaresult.grade', '=', 'A')
            ->count();
            $B = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where('ptaresult.grade', '=', 'B')
            ->count();
            $C = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where('ptaresult.grade', '=', 'C')
            ->count();
            $D = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where('ptaresult.grade', '=', 'D')
            ->count();
            $E = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where('ptaresult.grade', '=', 'E')
            ->count();
            $F = DB::table('ptaresult')
            ->join('students','ptaresult.studentID','=','students.studentID')
            ->select('ptaresult.*','students.*')
            ->where('ptaresult.grade', '=', 'F')
            ->count();
        }        
        $label = ['A', 'B', 'C', 'D', 'E', 'F'];
        $grade = [$A, $B, $C, $D, $E, $F];
        return view('report.reportOverview', ['A'=> $A, 'B'=> $B, 'C'=> $C, 'D'=> $D, 'E'=> $E, 'F'=> $F,'psmType' => $psmType, 'label'=> $label, 'grade'=> $grade]);
    }
    
}