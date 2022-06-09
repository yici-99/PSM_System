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

</style>

<div class="center">
<h1>Student List</h1><br>
</div>

<div class="divcenter">
<form action="">
        <div style="float:left;margin-left:160px;">
          <input style="height:30px;width:700px;" type="search" name="search" value="{{$search}}" placeholder="Search by Student ID">
        </div>
        <div>
        <button class="btn5">Search</button>
        <a style="color:black;" href="{{url('/studentListS')}}">
        <button class="btn5" type="button">Reset</button></a>
        </div>
      </form></div><br>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#psm1">PSM 1</a></li>
    <li><a data-toggle="tab" href="#psm2">PSM 2</a></li>
    <li><a data-toggle="tab" href="#pta">PTA</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade in active" id="psm1">
      <div style="padding-left:15px;padding-top:15px;">
      <h5 style="display:inline-block;">Student List For PSM 1</h5>
      </div>

      <br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
          <tr>
            <th scope="col">MATRIX ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
          @foreach($results1 as $result)
          <tr>
            <td scope="row">{{$result->studentID}}</td>
            <td>{{$result->studentName}}</td>
            <td><a href= "{{ url('reportS/'.$result->resultID.'/'.$result->psmType)}}">View</td>
          </tr>
          @endforeach

          </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="psm2">
    <div style="padding-left:15px;padding-top:15px;">
      <h5 style="display:inline-block;">Student List For PSM 2</h5>
      </div>
      <br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
            <tr>
            <th scope="col">MATRIX ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ACTION</th>
            </tr>
          </thead>
          @foreach($results2 as $result)
          <tr>
            <td scope="row">{{$result->studentID}}</td>
            <td>{{$result->studentName}}</td>
            <td><a href="{{ url('reportS/'.$result->resultID.'/'.$result->psmType)}}">View</td>
          </tr>
          @endforeach
          </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="pta">
    <div style="padding-left:15px;padding-top:15px;">
      <h5 style="display:inline-block;">Student List For PTA</h5>
      </div>
      <br>
        <table class="table table-light" style="border:1px solid;width:75%;margin:auto">
          <thead>
            <tr>
            <th scope="col">MATRIX ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
          @foreach($results3 as $result)
          <tr>
            <td scope="row">{{$result->studentID}}</td>
            <td>{{$result->studentName}}</td>
            <td><a href="{{ url('reportS/'.$result->resultID.'/'.$result->psmType)}}">View</td>
          </tr>
          @endforeach
          </tbody>
        </table>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<br><br>
@endsection