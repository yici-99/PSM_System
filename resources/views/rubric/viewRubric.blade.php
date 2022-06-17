@extends('masterC')
@section('content')
<!DOCTYPE html>
<html >
<style>

table.out{
border:4px solid black;
margin-left:2%;
width:97%;
table-layout:fixed;

}
th,tr,td{
border:3px solid ;
width:50px;
height:35px;
border-color:#6A0DAD;
}

.add-btn{
    margin-right:2%;
    float:right;
    font-family:Arial Black;
    border-width:4px;
    background:#FFF8DC;
    width:13%;
    height:50px;
    border-color:#FF4500;
    font-size:14px;
    color:black;
    margin-left:2%;
    padding: 15px 25px;
    text-align:center;

}

.update-btn{
    font-family:Arial Black;
    border-width:4px;
    background:#7D0552;
    border-color:#FFEF00;
    font-size:14px;
    color:white;
    padding: 10px 18px;
    text-align:center;

}


</style>
<body>
    
<button onclick="location.href='{{ url('/addRubric') }}'" class="add-btn" >ADD RUBRIC</button>
<br><br><br>
<form action="searchrubric" method="post">
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
    <th rowspan="2" style="font-size:16px;width:5.7%;"><center>Edit</center></th>
    <th rowspan="2" style="font-size:16px;width:5.7%;"><center>Delete</center></th>
</tr>
<tr style="background-color:#FFFFE0">
    <th style="width:30%;font-size:16px;"><center>Excellent</center></th>
    <th style="width:30%;font-size:16px;"><center>Good</center></th>
    <th style="width:30%;font-size:16px;"><center>Moderate</center></th>
    <th style="width:30%;font-size:16px;"><center>Weak</center></th>
    <th style="width:30%;font-size:16px;"><center>Very Weak</center></th>
    <th style="width:30%;font-size:16px;"><center>Fail</center></th>
    <th style="width:23%;font-size:16px;"><center>Rubric<br>Type</center></th>
    <th style="width:23%;font-size:16px;"><center>PSM Type</center></th>
   
</tr> 

@foreach($data as $saving)
<tr>
    <th><center>
        {{$saving->rubricID}}
        </center>
    </th>   
    <th>
        {{$saving->competency}}
    </th>
    <th>
        {{$saving->excellentDesc}}
    </th>
    <th>
        {{$saving->goodDesc}}
    </th>
    <th>
        {{$saving->modDesc}}
    </th>
    <th>
        {{$saving->weakDesc}}
    </th>
    <th>
        {{$saving->veryweakDesc}}
    </th>
    <th>
        {{$saving->failDesc}}
    </th>
    <th><center>
        {{$saving->rubricType}}
        </center>
    </th>
    <th><center>
        {{$saving->psmType}}
        </center>
    </th>
    <th><center>
        {{$saving->weight}}
        </center>
    </th>
    
    <th style="width:5%;"><center>
    <a href="/updateRubric/{{ $saving->rubricID }}"><button type="button" style="width:70px;height:70px;background-color:white;border-color:solid white;" > <i class="fas fa-edit" style="font-size:27px;text-align:center;"></button></i></a>
    </center>
    </th>
    <th style="width:5%;"><center>
    <a href="/viewRubric/{{ $saving->rubricID }}"><button type="button" style="width:70px;height:70px;background-color:white;border-color:solid white;" > <i class="fa fa-trash" style="font-size:27px;text-align:center;"></button></i></a>
    </center>
    </th>
</tr>
@endforeach
</table>
<br><br>



</body>
</html>
@endsection