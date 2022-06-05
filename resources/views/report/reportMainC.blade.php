@extends('masterC')

@section('menu')
<style>
    .button{
        top:50%;
        background-color:#D5D8DC;
        color: #000000;
        border-style: groove;
        border-color:#ABB2B9;
        border-radius:5px;
        padding:8px;
    }

    .button:hover {
      background-color:grey;
      transition: 0.7s;
  }

</style>


<center>
<h2>Manage Report</h2>

<br><br>

<div class><a href="studentListC">
    <button class="button">View Report</button>
</a></div>
<br>
<div><a href="reportOverview">
    <button class="button">Report Overview</button>
</a></div>


@endsection

