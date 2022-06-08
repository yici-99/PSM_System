<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\supervisor;


class usercontroller extends Controller
{
    public function home(request $req)
    {
        $deta = $req->input('detaa'); 
        if ($req->role_type == "student") {
            $deta = DB::table('student')->select('studentName','studentPhone','stdemail')->where('stdemail','=',$req->$email)->where('password','=',$req->$password)->get();
            return view('/masterStu', ['detaa' => $deta]);
        }
        else if ($req->role_type == "supervisor"){
            $deta = DB::table('supervisor')->select('svname','svphonenum','svemail')->where('svemail','=',$req->$email)->where('svpassword','=',$req->$password)->get();
            return view('/masterS',['detaa' => $deta]);
        }
        if ($req->role_type == "coordiantor"){
            $deta = DB::table('coordinator')->select('coordinatorname','coordinatorphonenum','coordinatoremail')->where('coordinatoremail','=',$req->$email)->where('cpassword','=',$req->$password)->get();
            return view('/masterC',['detaa' => $deta]);
        }
        
    }


    //Manage Coordinator
    function createstudent(Request $req)
    {
        $var = new student;
        $var->studentName=$req->name;
        $var->studentID=$req->id;
        $var->stdaddress=$req->address;
        $var->studentPhone=$req->phonenum;
        $var->stdemail=$req->email;
        $var->stdyear=$req->year;
        $var->stdsupervisor=$req->supervisor;
        $var->stdpsmtitle=$req->psmtitle;
        $var->psmType=$req->psmtype;
        $var->password=$req->spassword;
        $var->roletype=$req->role;
        $var->save();
        return redirect('searchstudent')->with('successMsg','Profile Successful created !');

    }

     function viewstudentlist()
    {
        $deta = Student::all();
        return view('\Coordinator\searchstudent',['deta'=>$deta]);
    }

    public function searchstudent(request $request)
    {
       
        $deta = $request->input('deta'); 
        $deta = Student::select('studentName','studentID','studentPhone','stdemail','stdsupervisor','stdpsmtitle')->where('studentName','LIKE', '%' . $deta . '%')->get();
        if (count ( $deta ) > 0)
        return view('\Coordinator\searchstudent', ['deta' => $deta])->with('successMsg','Results Found !');
        else
        return view ('\Coordinator\searchstudent', ['deta' => $deta])->with('FailedMsg','No Details found. Try to search again !' );		
        
    }

    public function viewstudentprofile($studentID)
    {
        $result = Student::select('*')->where('studentID', '=', $studentID)->get();
        return view('\Coordinator\viewstudent', ['result' => $result]);
    }

    public function deletestudentprofile($studentID)
    {
        $result = Student::select('*')->where('studentID', '=', $studentID)->delete();
        return redirect('searchstudent')->with('successMsg','Profile Successful deleted !');
    }

    public function updatestudentprofile($studentID)
    {
        $result = Student::select('*')->where('studentID', '=', $studentID)->get();
        return view('\Coordinator\updatestudent', ['result' => $result]);
    }

    public function updatestdprofile(request $request, $studentID)
    {
        
        $result= Student::where('studentID',$studentID) ->update(['studentName' => $request['studentName'], 'stdaddress' => $request['stdaddress'], 'studentPhone' => $request['studentPhone'], 'stdemail' => $request['stdemail'], 'stdyear' => $request['stdyear'],'stdsupervisor'=>$request['stdsupervisor'],'stdpsmtitle'=>$request['stdpsmtitle'],'psmType'=>$request['psmType'],'password'=>$request['password']])->where ('studentID','=',$studentID)->update();
        return view('\Coordinator\viewstudent', ['result' => $result])->with('successMsg','Results Found !');
    }

    function viewpsmlist()
    {
        $deta = Student::all();
        return view('\Coordinator\searchpsmtitle',['deta'=>$deta]);
    }
    
    public function searchpsm(request $request)
    {
       
        $deta = $request->input('deta'); 
        $deta = Student::select('studentName','studentID','stdsupervisor','stdpsmtitle','psmType')->where('psmType','LIKE', '%' . $deta . '%')->get();
        if (count ( $deta ) > 0)
        return view('\Coordinator\searchpsmtitle', ['deta' => $deta])->with('successMsg','Results Found !');
        else
        return view ('\Coordinator\searchpsmtitle', ['deta' => $deta])->with('FailedMsg','No Details found. Try to search again !' );		
        
    }

    function createsupervisor(Request $req)
    {
        $var = new supervisor;
        $var->supervisorID=$req->id;
        $var->svbiography=$req->biography;
        $var->svname=$req->name;
        $var->svphonenum=$req->phonenum;
        $var->svemail=$req->email;
        $var->svexpertise=$req->expertise;
        $var->svpassword=$req->password;
        $var->role_type=$req->role;
        $var->save();
        return redirect('searchsvlist')->with('successMsg','Profile Successful created !');

    }

    function viewsvlist()
    {
        $deta = supervisor::all();
        return view('\Coordinator\searchsvlist',['deta'=>$deta]);
    }

    public function searchsv(request $request)
    {
       
        $deta = $request->input('deta'); 
        $deta = supervisor::select('svname','supervisorID','svphonenum','svemail')->where('svname','LIKE', '%' . $deta . '%')->get();
        if (count ( $deta ) > 0)
        return view('\Coordinator\searchsvlist', ['deta' => $deta])->with('successMsg','Results Found !');
        else
        return view ('\Coordinator\searchsvlist', ['deta' => $deta])->with('FailedMsg','No Details found. Try to search again !' );		
        
    }

}