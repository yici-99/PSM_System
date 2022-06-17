@extends('masterS')
@section('content')
<!DOCTYPE html>
<html >
<style>

table.out{
border:4px solid black;
width:97%;
margin-left:2%;
table-layout:fixed;

}

th,tr,td{
border:3px solid ;
width:50px;
height:35px;
border-color:#6A0DAD;
}
tr{
width:40px;
}

</style>
<body>
      
<form action="searchSVrubric" method="post">
    @csrf
    <b>
<select name="rubricType"  style="margin-left:2%;width:20%;border-radius:6px;font-size:20px;height:20%;font-family:Rockwell;background:#EDE6D6;border-width:3px;border-color:black;">
    <option selected disabled value="">Rubric Type</option>
    <option value="STU_PSM1" name="rubricType">STU PSM1</option>
    <option value="STU_PSM2" name="rubricType">STU PSM2</option>
    <option value="STU_PTA" name="rubricType">STU PTA</option>
    <option value="EVA_PSM1" name="rubricType">EVA PSM1</option>
    <option value="EVA_PSM2" name="rubricType">EVA PSM2</option>
    <option value="EVA_PTA" name="rubricType">EVA PTA</option>    
    </select>
</b>
<button type="submit" style="width:6%;background-color:white;border-color:white;border-radius:10px;"  > <i class="fa fa-search" style="font-size:23px;text-align:center;"></i></button>
</form>

<br><br>
<table class="out">
<tr  style="background-color:#FFFFE0">
    <th rowspan="2" style="width:4%;font-size:16px;"><center>No.</center></th>
    <th rowspan="2" style="width:9%;font-size:16px;"><center>Competency</center></th>
    <th colspan="8"  style="font-size:16px;"><center>Scale</center></th>
    <th rowspan="2" style="width:5%;font-size:16px;"><center>Weight</center></th>
</tr>
<tr style="background-color:#FFFFE0">
    <th style="width:30%;font-size:16px;"><center>Excellent</center></th>
    <th style="width:30%;font-size:16px;"><center>Good</center></th>
    <th style="width:30%;font-size:16px;"><center>Moderate</center></th>
    <th style="width:30%;font-size:16px;"><center>Weak</center></th>
    <th style="width:30%;font-size:16px;"><center>Very Weak</center></th>
    <th style="width:30%;font-size:16px;"><center>Fail</center></th>
    <th style="width:31%;font-size:16px;"><center>Rubric<br>Type</center></th>
    <th style="width:30%;font-size:16px;"><center>PSM Type</center></th>
   
</tr> 

@foreach($svData as $save)
<tr>
    <th><center>
        {{$save->rubricID}}
        </center>
    </th>   
    <th>
        {{$save->competency}}
    </th>
    <th>
        {{$save->excellentDesc}}
    </th>
    <th>
        {{$save->goodDesc}}
    </th>
    <th>
        {{$save->modDesc}}
    </th>
    <th>
        {{$save->weakDesc}}
    </th>
    <th>
        {{$save->veryweakDesc}}
    </th>
    <th>
        {{$save->failDesc}}
    </th>
    <th><center>
        {{$save->rubricType}}
        </center>
    </th>
    <th><center>
        {{$save->psmType}}
        </center>
    </th>
    <th><center>
        {{$save->weight}}
        </center>
    </th>
</tr>
@endforeach
</table>
<br><br>


</body>
</html>
@endsection