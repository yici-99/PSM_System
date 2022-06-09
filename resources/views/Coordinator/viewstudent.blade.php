@extends ('masterC')
@section('content')

<!DOCTYPE html>
    <html>
        <style>

table{
border:no border;
text-align:center;
font-size:18px;
margin-left:200px;
}
.round {
  border-radius: 50%;
}

.b{
  width:100px;
  margin-left:20px;
  border-radius:8px;
}

.b1 {
  background-color: white;
  color: black; 
  border: 2px solid orange;
}

.b1:hover {
  background-color: orange;
  color: white;
}

</style>
@if(session()->has('successMsg'))
    <div class="alert alert-success">
        {{ session()->get('successMsg') }}
    </div>
@endif
<h3 style="color:orange;font-size:39px;text-align:center;margin-top:-6%;">Student's Profile</h3>
<br><br><br><br><br><br>
@foreach($result as $detaa)
<form action="/updatestudent/{{ $detaa->studentID}}" method='get'>
    @csrf
<table>
    <tr>
        <th><img src="" style="height=150";width="150";></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Name:</th>
<th>&emsp;&emsp;{{ $detaa->studentName }}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Matric ID:</th>
<th>&emsp;&emsp;{{$detaa->studentID}}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Address:</th>
<th>&emsp;&emsp;{{$detaa->stdaddress}}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Phone Number:</th>
<th>&emsp;&emsp;{{$detaa->studentPhone}}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Email:</th>
<th>&emsp;&emsp;{{$detaa->stdemail}}<br><br></th>
</tr>

<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Year:<br><br></th>
<th>&emsp;&emsp;{{$detaa->stdyear}}</th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Supervisor:</th>
<th>&emsp;&emsp;{{$detaa->stdsupervisor}}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;PSM title:</th>
<th>&emsp;&emsp;{{$detaa->stdpsmtitle}}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;PSM Type:<br><br></th>
<th>&emsp;&emsp;{{$detaa->psmType}}</th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Password:</th>
<th>&emsp;&emsp;{{$detaa->password}}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Role Type:<br><br></th>
<th>&emsp;&emsp;{{$detaa->roletype}}</th>
</tr>
@endforeach


</table>
<br><br>
<button onclick="location.href='{{ url('/updatestudent') }}'" class="b b1" value="Edit" style="width:80px;height: 40px;margin-left:800px;">EDIT</button>
<button onclick="location.href='{{ url('/searchstudent') }}'"  class="b b1" value="Back" style="width:80px;height: 40px;margin-right:1%;">BACK</button>
<br><br>
</form>
</html>




@endsection
