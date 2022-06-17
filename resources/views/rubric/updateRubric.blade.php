@extends('masterC')
@section('content')
<!DOCTYPE html>
<html >
<style>

div.update{
    border-style:solid;
    border-color:#008B8B;
    border-width:8px;
    width:86%;
    margin-left:5%;
}

</style>
<body>
<div class="update">
    <h2 style="font-family:fantasy;font-size:70px;"><center>UPDATE RUBRIC</center></h3>
    <hr style="margin-left:2%;margin-right:2%;">
    <center>
    <form action="/editrubric" method="post">
    @csrf
    <table style="width:80%;margin-left:3%;margin-right:3%;text-align:left;font-family:Rockwell;">
    @foreach ($data as $shows)
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">No.</th>
            <th style=""><input type="number" style="background:#FBF6D9;width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;font-size:20px;border-width:4px;"  value="{{$shows->rubricID}}" name="rubricID" readonly></th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">Rubric Type</th>
            <th style="">
            <input type="radio" style="width:13%;height:40px;margin-left:3%;font-size:40px;font-family:Verdana;" value="student" {{ ($shows->rubricType=="student")? "checked" : "" }} name="rubricType">Student
            <input type="radio" style="width:13%;height:40px;margin-left:3%;font-size:40px;font-family:Verdana;" value="evaluator" {{ ($shows->rubricType=="evaluator")? "checked" : "" }} name="rubricType">Evaluator
            </th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">PSM Type</th>
            <th style="">
            <input type="radio" style="width:13%;height:40px;margin-left:3%;font-size:40px;font-family:Verdana;" value="PSM1" {{ ($shows->psmType=="PSM1")? "checked" : "" }} name="psmType">PSM1
            <input type="radio" style="width:13%;height:40px;margin-left:3%;font-size:40px;font-family:Verdana;" value="PSM2" {{ ($shows->psmType=="PSM2")? "checked" : "" }} name="psmType">PSM2
            <input type="radio" style="width:13%;height:40px;margin-left:3%;font-size:40px;font-family:Verdana;" value="PTA" {{ ($shows->psmType=="PTA")? "checked" : "" }} name="psmType">PTA
            </th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">Competency</th>
            <th style=""><input style="width:90%;height:40px;border:solid;margin-left:3%;font-size:20px;border-color:#C34A2C;border-width:4px;" value="{{ $shows->competency}}" name="section"></th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="3" >Scale</th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Execellent</i></th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;font-size:20px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;" name="excellent" >{{ $shows->excellentDesc}}</textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Good</i></th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;font-size:20px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;" name="good">{{ $shows->goodDesc}}</textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Moderate</i></th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;font-size:20px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;" name="moderate" >{{ $shows->modDesc}}</textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Weak</i></th>
            <th style="border:"><textarea rows="5" cols="10" style="width:90%;font-size:20px;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;" name="weak" >{{ $shows->weakDesc}}</textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Very Weak</i></th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;font-size:20px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;" name="veryweak" >{{ $shows->veryweakDesc}}</textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Fail</th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;font-size:20px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;" name="fail">{{ $shows->failDesc}}</textarea></th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">Weight</th>
            <th style=""><input style="width:90%;height:40px;border:solid;margin-left:3%;font-size:20px;border-color:#C34A2C;border-width:4px;" value="{{ $shows->weight}}" name="weight"></th>
        </tr>
       @endforeach
    </table>
    
    <br><br>
    <input type="submit" style="font-family:Arial Black;border-width:5px;background:#12AD2B;width:17%;height:70px;border-color:black;font-size:18px;border-radius:12px;color:white;margin-left:10%;" value="DONE" >
    </form>
</center>

    <br>

</div>
<br><br>

</body>
</html>
@endsection