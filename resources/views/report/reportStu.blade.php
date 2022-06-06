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
        width: 150px;
        text-align: right;
        padding-right:200px;
      }
      input{
          padding:5px 8px;
      }
      .btn5{
        width:12%;
        border-width:1px;
        border-color:#D3D3D3;
        border-radius:5px;
        height:30px;
        float:right;
        background-color: #C5C5C5; /* For browsers that do not support gradients */
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
</style>
<div>
<h1><center>Student Report</center></h1>
<br><br>
<div class="div5">
<form action="" method="">
    <div class="div5">
        <label class="label5">Matrix ID:</label><input type="text"><br>
    </div>
    <div class="div5">
        <label class="label5">Name:</label><input type="text"><br>
    </div>
    <div class="div5">
        <label class="label5">Title:</label><input type="text"><br>
    </div>
    <div class="div5">
        <label class="label5">Total Marks:</label><input type="text"><br>
    </div>
    <div class="div5">
        <label class="label5">Grade:</label><input type="text"><br>
    </div>
    <div class="div6">
    <button class="btn5"> Download</button>
    </div>
</form>
<br><br>
</div>
</div>
@endsection