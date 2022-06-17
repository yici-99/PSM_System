@extends('masterC')
@section('content')
<!DOCTYPE html>
<html>
<style>
div.add{
    border-style:solid;
    border-color:#008B8B;
    border-width:8px;
    width:90%;
    margin-left:5%;
}

</style>
<body>

<div class="add">
    <h2 style="font-family:fantasy;font-size:70px;"><center>ADD NEW RUBRIC</center></h3>
    <hr style="margin-left:2%;margin-right:2%;">
    <center>
    <form action="addrubric" method="post">
        @csrf
    <table style="width:80%;margin-left:3%;margin-right:3%;text-align:left;font-family:Rockwell;">
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">No.</th>
            <th style=""><input type="number" style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Rubric ID" name="id"></th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">Rubric Type</th>
            <th style="">
            <input type="radio" style="width:13%;height:30px;margin-left:3%;font-size:40px;font-family:Verdana;font-size:20px;" value="student" name="rubricType">Student
            <input type="radio" style="width:13%;height:30px;margin-left:3%;font-size:40px;font-family:Verdana;font-size:20px;" value="evaluator" name="rubricType">Evaluator
            </th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">PSM Type</th>
            <th style="">
            <input type="radio" style="width:13%;height:30px;margin-left:3%;font-size:40px;font-family:Verdana;" value="PSM1" name="psmType">PSM1
            <input type="radio" style="width:13%;height:30px;margin-left:3%;font-size:40px;font-family:Verdana;" value="PSM2" name="psmType">PSM2
            <input type="radio" style="width:13%;height:30px;margin-left:3%;font-size:40px;font-family:Verdana;" value="PTA" name="psmType">PTA
            </th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">Competency</th>
            <th style=""><input style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Rubric Section" name="section"></th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="3">Scale</th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Execellent</i></th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Description" name="excellent"></textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Good</i></th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Description" name="good"></textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Moderate</i></th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Description" name="moderate"></textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Weak</i></th>
            <th style="border:"><textarea rows="5" cols="10" style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Description" name="weak"></textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Very Weak</i></th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Description" name="veryweak"></textarea></th>
        </tr>
        <tr style="height:80px;">
            <th style="width:10%;"></th>
            <th style="width:20%;font-size:25px;"><i>Fail</th>
            <th style=""><textarea rows="5" cols="10" style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Description" name="fail"></textarea></th>
        </tr>
        <tr style="height:60px;">
            <th style="width:30%;font-size:25px;color:#342D7E;" colspan="2">Weight</th>
            <th style=""><input style="width:90%;height:40px;border:solid;margin-left:3%;border-color:#C34A2C;border-width:4px;font-size:20px;" placeholder="Weightage" name="weight"></th>
        </tr>
    </table>
    <br><br>
    <input type="submit" style="font-family:Arial Black;border-width:5px;background:#12AD2B;width:17%;height:70px;border-color:black;font-size:18px;border-radius:12px;color:white;" value="DONE"  onclick="location.href='{{ url('/viewRubric') }}'">
    </form>
    </center>
    <br>

</div>


<br><br>

</body>
</html>
@endsection