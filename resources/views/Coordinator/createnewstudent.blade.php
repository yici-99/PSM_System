@extends ('masterC')
@section('content')

<!DOCTYPE html>
    <html>
        <style>

table{
border:no border;
text-align:left;
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
<h3 style="color:orange;font-size:39px;text-align:center;margin-top:-6%;">Create New Student's Profile</h3>
<br><br><br><br><br><br>
<form action='create' method='post'>
    @csrf
<table>
    <tr>
        <th><img src="" style="height=150";width="150";></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Name:</th>
<th>&emsp;&emsp;<input type="text" name = "name"  size="40" placeholder="Student's Name" required><br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Matric ID:</th>
<th>&emsp;&emsp;<input type="text"  name = "id"  size="40" placeholder ="Student's Matric ID"><br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Address:</th>
<th>&emsp;&emsp;<input type="text" name="address" size="40" placeholder="Student's Address" required><br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Phone Number:</th>
<th>&emsp;&emsp;<input type="text" name="phonenum" size="40" placeholder="Student's Phone Number" required><br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Email:</th>
<th>&emsp;&emsp;<input type="text" name="email" size="40" placeholder="Student's Email Address" required><br><br></th>
</tr>

<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Year:<br><br></th>
<th>&emsp;&emsp;<select name = "year" required>
<option value ="3">3</option>
<option value = "4"> 4</option><br><br>
</select></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Supervisor:</th>
<th>&emsp;&emsp;<input type="text" name = "supervisor"  size="40" placeholder="Supervisor's Name" required><br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;PSM title:</th>
<th>&emsp;&emsp;<input type="text" name = "psmtitle"  size="40" placeholder="Student's PSM title" required><br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;PSM Type:<br><br></th>
<th>&emsp;&emsp;<select name = "psmtype" required>
<option value ="PSM1">PSM 1</option>
<option value = "PSM2"> PSM 2</option><br><br>
<option value = "PTA"> PTA</option><br><br>
</select></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Password:</th>
<th>&emsp;&emsp;<input type="text" name = "spassword"  size="40" placeholder="Password" required><br><br></th>
</tr>
<tr>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Role Type:<br><br></th>
<th>&emsp;&emsp;<select name = "role" required>
<option value ="Student">Student</option>
<option value = "Coordiantor">Coordinator</option><br><br>
<option value = "Supervisor">Supervisor</option><br><br>
</select></th>
</tr>


</table>
<br><br>
<button type="submit" class="b b1" value="Create" style="width:80px;height: 40px;margin-left:50%;"> CREATE</button>
<button onclick="location.href='{{ url('/searchstudent') }}'" type="submit" class="b b1" value="DeBack" style="width:80px;height: 40px;margin-right:1%;">BACK</button></a>
<br><br>
</form>
</html>




@endsection
