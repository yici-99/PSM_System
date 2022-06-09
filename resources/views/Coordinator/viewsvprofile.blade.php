@extends ('masterC')
@section('content')

<!DOCTYPE html>
    <html>
        <style>

table {
border:no border;
text-align:left;
font-size:18px;
height:25px;
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

.bio{
    margin-left:90%;
}

</style>
@if(session()->has('successMsg'))
    <div class="alert alert-success">
        {{ session()->get('successMsg') }}
    </div>
@endif
<h3 style="color:orange;font-size:39px;text-align:center;margin-top:-6%;">Supervisor's Profile</h3>
<br><br><br><br><br><br>
@foreach($result as $detaa)
<form action="/searchsvlist"  method='get'>
    @csrf
<table>
    <tr>
        <th><img src="" style="height=150";width="150";></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Biography</th>
</tr>
<tr>
<th class="bio">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{ $detaa->svbiography }}<br><br></th>
</tr>
<br>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Info<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; *SupervisorID: <br><br></th>
<th>&emsp;&emsp;{{ $detaa->supervisorID }}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; *Name: <br><br></th>
<th>&emsp;&emsp;{{ $detaa->svname }}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; *Phone Number:<br><br></th>
<th>&emsp;&emsp;{{ $detaa->svphonenum }}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; *Email:<br><br></th>
<th>&emsp;&emsp;{{ $detaa->svemail }}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;*Expertise:<br><br></th>
<th>&emsp;&emsp;{{ $detaa->svexpertise }}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; *Password:<br><br></th>
<th>&emsp;&emsp;{{ $detaa->svpassword }}<br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; *Role Type:<br><br></th>
<th>&emsp;&emsp;{{ $detaa->role_type }}<br><br></th>
</tr>
<tr>
<th style="text-colour:red;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; *Required Field</th>
</tr>
@endforeach

</table>
<br><br>
@endforeach
<input type="submit" class="b b1" value="EDIT" style="width:100px;margin-left:1000px;"></a>
<button onclick="location.href='{{ url('/searchsvlist') }}'" type="submit" class="b b1" value="DeBack" style="width:80px;height: 40px;margin-right:1%;">BACK</button>
<br><br>
</form>
</html>




@endsection
