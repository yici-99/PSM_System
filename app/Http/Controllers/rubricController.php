<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rubric;

class rubricController extends Controller
{
    //display to coordinator
    public function display()
    {
        $data = rubric::all();
        return view('\rubric\viewRubric',['data'=>$data]);
    }

    public function svDisplay()
    {
        $svData = rubric::all();
        return view('\rubric\svRubric', ['svData' =>$svData]);
        
    }

    public function stuDisplay()
    {
        //$stuData = rubric::all();
        $stuData = rubric::select('*')->where('rubricType', '=', 'student')->get();
        return view('rubric\studentRubric', compact('stuData'));
        
    }

    function saveData(Request $saving)
    {
        $var= new rubric;
        $var->rubricID=$saving->id;
        $var->rubricType=$saving->rubricType;
        $var->psmType=$saving->psmType;
        $var->competency=$saving->section;
        $var->excellentDesc=$saving->excellent;
        $var->goodDesc=$saving->good;
        $var->modDesc=$saving->moderate;
        $var->weakDesc=$saving->weak;
        $var->veryweakDesc=$saving->veryweak;
        $var->failDesc=$saving->fail;
        $var->weight=$saving->weight;
        $var->save();
        return redirect('viewRubric');
    }


    function showUpdate($rubricID)
    {
        $data= rubric::select('*')->where('rubricID', '=',$rubricID)->get();
        return view('\rubric\updateRubric',['data' => $data]);
    }

    function delete($rubricID)
    {
        $result = rubric::select('*')->where('rubricID', '=', $rubricID)->delete();
        return redirect('viewRubric');

    }

    function updateData(Request $req)
    {
        $shows= rubric::find($req->rubricID);
        $shows->rubricType=$req->input('rubricType');
        $shows->psmType=$req->input('psmType');
        $shows->competency=$req->input('section');
        $shows->excellentDesc=$req->input('excellent');
        $shows->goodDesc=$req->input('good');
        $shows->modDesc=$req->input('moderate');
        $shows->weakDesc=$req->input('weak');
        $shows->veryweakDesc=$req->input('veryweak');
        $shows->failDesc=$req->input('fail');
        $shows->weight=$req->input('weight');
        $shows->update();
        return redirect('viewRubric');

    }

    function findRubric(Request $request)
    {

        if($request->rubricType == 'STU_PSM1')
        {
            $data = rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PSM1')->get();
        }
        elseif($request->rubricType == 'STU_PSM2')
        {
            $data= rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PSM2')->get();

        }
        elseif($request->rubricType == 'STU_PTA')
        {
            $data= rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PTA')->get();
        }
        elseif($request->rubricType == 'EVA_PSM1')
        {
            $data= rubric::select('*')->where('rubricType', '=','evaluator')->where('psmType', '=','PSM1')->get();
        }
        elseif($request->rubricType == 'EVA_PSM2')
        {
            $data= rubric::select('*')->where('rubricType', '=','evaluator')->where('psmType', '=','PSM2')->get();
        }
        else
        {
            $data= rubric::select('*')->where('rubricType', '=','evaluator')->where('psmType', '=','PTA')->get();
        }

        return view('\rubric\viewRubric',['data' => $data]);

    }


    function findSVRubric(Request $request)
    {

        if($request->rubricType == 'STU_PSM1')
        {
            $svData = rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PSM1')->get();
        }
        elseif($request->rubricType == 'STU_PSM2')
        {
            $svData= rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PSM2')->get();

        }
        elseif($request->rubricType == 'STU_PTA')
        {
            $svData= rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PTA')->get();
        }
        elseif($request->rubricType == 'EVA_PSM1')
        {
            $svData= rubric::select('*')->where('rubricType', '=','evaluator')->where('psmType', '=','PSM1')->get();
        }
        elseif($request->rubricType == 'EVA_PSM2')
        {
            $svData= rubric::select('*')->where('rubricType', '=','evaluator')->where('psmType', '=','PSM2')->get();
        }
        else
        {
            $svData= rubric::select('*')->where('rubricType', '=','evaluator')->where('psmType', '=','PTA')->get();
        }

        return view('\rubric\svRubric',['svData' => $svData]);

    }


    function findSTRubric(Request $request)
    {

        if($request->rubricType == 'STU_PSM1')
        {
            $stuData = rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PSM1')->get();
        }
        elseif($request->rubricType == 'STU_PSM2')
        {
            $stuData= rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PSM2')->get();

        }
        else
        {
            $stuData= rubric::select('*')->where('rubricType', '=','student')->where('psmType', '=','PTA')->get();
        }
        
        return view('\rubric\studentRubric',['stuData' => $stuData]);

    }


}
