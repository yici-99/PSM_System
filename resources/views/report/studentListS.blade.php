@extends('masterS')

@section('table')
<style>
.tb1{
  border:1px solid;
  margin:auto;
}
th,td{
  border:1px solid;
  padding-left:5px;
}
.thd{
  background-color:#C5C5C5;
}
h5{
  padding-left:5px;
}
</style>
<div>
  <Center>
<h1>Student List</h1><br></Center>
</div>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#psm1">PSM 1</a></li>
    <li><a data-toggle="tab" href="#psm2">PSM 2</a></li>
    <li><a data-toggle="tab" href="#pta">PTA</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade in active" id="psm1">
      <div style="padding-right:15px;padding-top:15px;"><h5 style="display:inline-block;">Student List For PSM 1</h5>
      <input type="text" placeholder="Search by..." style="display:inline-block;float:right;"></div><br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
          <tr>
            <th scope="col">MATRIX ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td scope="row">1</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td scope="row">2</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td scope="row">3</td>
            <td></td>
            <td></td>
          </tr>
          </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="psm2">
    <div style="padding-right:15px;padding-top:15px;"><h5 style="display:inline-block;">Student List For PSM 2</h5>
      <input type="text" placeholder="Search by..." style="display:inline-block;float:right;"></div><br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
            <tr>
            <th scope="col">MATRIX ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td scope="row">1</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td scope="row">2</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td scope="row">3</td>
            <td></td>
            <td></td>
          </tr>
          </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="pta">
    <div style="padding-right:15px;padding-top:15px;"><h5 style="display:inline-block;">Student List For PSM 2</h5>
      <input type="text" placeholder="Search by..." style="display:inline-block;float:right;"></div><br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
            <tr>
            <th scope="col">MATRIX ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
          <tr>
            <td scope="row">{{$student->studentID}}</td>
            <td>{{$student->studentName}}</td>
            <td><a href="">View</td>
          </tr>
          </tbody>
        </table>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<br><br>
@endsection