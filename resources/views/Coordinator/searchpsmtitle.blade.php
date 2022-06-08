@extends ('masterC')
@section('content')


<!DOCTYPE html>
    <html>
        <style>

table {
    margin:auto;
    width:95%;
    border-collapse:collapse;
    font-family:Arial;
    padding-bottom:20px;
}

table th,td{
  border: 2px solid orange;
  height:25px;
  text-align:center;
}

.search{
  width:100px;
  margin-left:20px;
  border-radius:8px;
}

.search1 {
  background-color: white; 
  color: black; 
  border: 2px solid orange;
}

.search1:hover {
  background-color: orange;
  color: white;
}

.search {
    margin-left:35px;
}

.search2 {
    margin-left:30px;
}

</style>

<h3 style="color:orange;font-size:39px;text-align:center;margin-top:-6%;">PSM Title List</h3>
<br><br><br><br><br><br>
<div class=search2>
                <form action="/searchpsmtitle/search" method="GET" role="search">
                    <div class="input-group">
                    &emsp;&emsp;<button class="btn btn-info" style="width:10%;height:10%;font-size:18px;background-colour:white" size="5" type="submit" title="Search projects"><i class="fas fa-search"></i></button>
                        <input style="width:60%;height:10%;font-size:18px;" size="30" type="text" class="form-control mr-2" name="deta" placeholder="Search PSM title" id="deta">
                        <a href="/searchpsmtitle" class=" mt-1">&emsp;<button  class="btn btn-danger" style="width:10%;height:10%;font-size:18px;" size="5" type="button" title="Refresh page"><i class="fas fa-sync-alt"></i></button></a>
                    </div>
                    @if(!empty($successMsg))
                        <div class="alert alert-success"> {{ $successMsg }}</div>
                    @endif

                    @if(!empty($FailedMsg))
                        <div class="alert alert-danger"> {{ $FailedMsg }}</div>
                    @endif
</div>
</form>
<br>
<table>
  <thead>
<tr>
	<th>PSM Ttile</th>
	<th>Student's Name</th>
	<th>Student's ID</th>
	<th>Supervisor</th>
    <th>Type of PSM</th>
  </tr>
</thead>
<tbody>
@foreach($deta as $detaa)
  <tr>
  <td >{{$detaa->stdpsmtitle}}</td>
  <td>{{$detaa->studentName}}</td>
	<td >{{$detaa->studentID}}</td>
    <td >{{$detaa->stdsupervisor}}</td>
    <td >{{$detaa->psmType}}</td>
    </tr>
  @endforeach
</tbody>
</tbody>


      </table>
<br><br>
</html>




@endsection
