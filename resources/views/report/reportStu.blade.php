@extends('masterStu')

@section('table')
<style>
    .div5{
        margin-bottom: 10px;
        text-align:center;
      }
      .div6{
        padding-right:100px;
      }
    .label5{
        display: inline-block;
        width: 300px;
        text-align: right;
        padding-right:200px;
      }
      .label6{
        display: inline-block;
        width: 300px;
        text-align: right;
      }
      input{
          padding:5px 8px;
          width:30%;
      }
      .btn5{
        width:12%;
        border-width:1px;
        border-color:#D3D3D3;
        border-radius:5px;
        height:30px;
        float:right;
        background-color: #C5C5C5; 
        background-image: linear-gradient(#DCDCDC, #AEAEAE, #DCDCDC);
      }
      .btn5:hover {
        background-image: -moz-none;
        background-image: -webkit-none;
        background-image: -webkit-none;
        background-image: -o-none;
        background-image:none;
        background-color: #E2AD27;
        box-shadow: 5px 5px 5px #888888;
         transition: 0.7s;
      }
      .tb1{
        border:1px solid #C5C5C5;
        margin:auto;
    }

    th,td{
        border:1px solid #C5C5C5;
        padding-left:5px;
        padding:5px;
    }

    th{
        background-color:#C5C5C5;
    }
</style>
<div>
<h1><center>Student Report</center></h1>
<br><br>
<div class="div5">
<form action="" method="POST">
    <div class="div5">
        <label class="label5">Matrix ID:</label><input type="text" readonly value="{{$data->studentID}}"><br>
    </div>
    <div class="div5">
        <label class="label5">Name:</label><input type="text" readonly value="{{$data->studentName}}"><br>
    </div>
    <div class="div5">
        <label class="label5">Title:</label><input type="text" readonly value="{{$data->stdpsmtitle}}"><br><br>
    </div>
    <div class="div5">
        <div>
        <label class="label6" style="float:left;padding-left:350px;">Total Marks:</label></div>
        <div style="padding-right:1px;">
        <table class="tb1">
            <tr>
            <th scope="col">EVALUATION 1</th>
            <th scope="col">EVALUATION 2</th>
            <th scope="col">EVALUATION 3</th>
            <th scope="col">TOTAL MARK</th>
            </tr>
            <tr>
            <td scope="col">{{$data->svMark1}}</td>
            <td scope="col">{{$data->evMark}}</td>
            <td scope="col">{{$data->svMark2}}</td>
            <td scope="col">{{$data->totalMark}}</td>
            </tr>
        </table></div>
        <br>
    </div>
    <div class="div5">
        <label class="label5">Grade:</label><input type="text" readonly value="{{$data->grade}}"><br>
    </div>
    <div class="div6">
    <button class="btn5"> Download</button>
    </div>
</form>
<br><br>
</div>
</div>
@endsection