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
</style>

<div>
  <Center>
<h1>Student List</h1><br>
<input type="text" placeholder="Search by..." ></Center><br>
</div>

<table class="tb1" style="width:75%">
  <thead class="thd">
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
</table><br><br>
<center>
@endsection