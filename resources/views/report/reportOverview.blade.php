@extends('masterC')

@section('table')
<style>
.tb1{
  border:1px solid;
  margin:auto;
}
th,td{
  border:1px solid;
  padding-left:5px;
  width:10%;
  text-align:center;
}
h5{
  padding-left:5px;
}
th{
  background-color:#C5C5C5;
}
.btn5{
  width:10%;
  border-width:1px;
  border-color:#D3D3D3;
  border-radius:5px;
  height:30px;
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
.center{
  text-align:center;
}
.divcenter{
  margin:auto;
  text-align:center;
}
select,option{
  width:150px;
  height:30px;
}

</style>

<div class="center">
<h1>Report Overview</h1><br>
</div>

<form action = "">
<div class="divcenter">
  <div>
    <label>Select Type:</label>
    <select id="psmType" name="psmType">
      <option value="psm1">PSM 1</option>
      <option value="psm2">PSM 2</option>
      <option value="pta">PTA</option>
    </select>
    <button class="btn5">Show</button>
  </div>
</div>
</form>



@if($psmType=='psm1')
  <div class="tab-content">
    <div class="tab-pane fade in active" id="psm1">
      <div style="padding-left:15px;padding-top:15px;">
      <h5 style="display:inline-block;">Report Overview For <b>PSM 1</b></h5>
      </div>

      <br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
          <tr>
            <th scope="col">Grade</th>
            <th scope="col">A</th>
            <th scope="col">B</th>
            <th scope="col">C</th>
            <th scope="col">D</th>
            <th scope="col">E</th>
            <th scope="col">F</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td scope="row">Total</td>
            <td>{{$A}}</td>
            <td>{{$B}}</td>
            <td>{{$C}}</td>
            <td>{{$D}}</td>
            <td>{{$E}}</td>
            <td>{{$F}}</td>
          </tr>
          </tbody>
        </table>
    </div>
  @elseif($psmType == 'psm2')
  <div class="tab-content">
    <div class="tab-pane fade in active" id="psm2">
      <div style="padding-left:15px;padding-top:15px;">
      <h5 style="display:inline-block;">Report Overview For <b>PSM 2</b></h5>
      </div>

      <br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
          <tr>
            <th scope="col">Grade</th>
            <th scope="col">A</th>
            <th scope="col">B</th>
            <th scope="col">C</th>
            <th scope="col">D</th>
            <th scope="col">E</th>
            <th scope="col">F</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td scope="row">Total</td>
            <td>{{$A}}</td>
            <td>{{$B}}</td>
            <td>{{$C}}</td>
            <td>{{$D}}</td>
            <td>{{$E}}</td>
            <td>{{$F}}</td>
          </tr>
          </tbody>
        </table>
    </div>
  @elseif($psmType == "pta")
  <div class="tab-content">
    <div class="tab-pane fade in active" id="pta">
      <div style="padding-left:15px;padding-top:15px;">
      <h5 style="display:inline-block;">Report Overview For <b>PTA</b></h5>
      </div>

      <br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
          <tr>
            <th scope="col">Grade</th>
            <th scope="col">A</th>
            <th scope="col">B</th>
            <th scope="col">C</th>
            <th scope="col">D</th>
            <th scope="col">E</th>
            <th scope="col">F</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td scope="row">Total</td>
            <td>{{$A}}</td>
            <td>{{$B}}</td>
            <td>{{$C}}</td>
            <td>{{$D}}</td>
            <td>{{$E}}</td>
            <td>{{$F}}</td>
          </tr>
          </tbody>
        </table>
    </div>
  @else
  <br><br><br><br><br><br><br>
  @endif
<br><br>
@endsection