<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentresult;
use App\Models\assigns;
use Illuminate\Support\Facades\DB;
class Top20 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order()
    {
        $id = studentresult::select('studentName','studentID','SvName','studentTitle','psm1Marks','psm2Marks')
                            ->orderBy('psm2Marks', 'DESC')
                            ->get();
        return view('Top_20_students.Resultmain',['id'=> $id])->with('success','Generated Top 20 students');        

        //$id = \App\Models\studentresult::all();
        //return view('Top_20_students.Resultmain',['id'=> $id]);
        
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = \App\Models\studentresult::all();
        return view('Top_20_students.Resultmain',['id'=> $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

         \App\Models\assigns::create($request->all());
         return redirect('/studentresult');
    }    


}
