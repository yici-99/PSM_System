@extends('masterC')


@section('form')

@if(\Session::has('success'))
<div class="alert alert-success" role="alert" style="margin:10px;">
  {{ \Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
</div>

@endif

<div class="container">
  <h2>Set Deadline</h2><br>
  <form class="form-horizontal" action="" method="POST">
      @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="psmType">PSM Type:</label>
        
      <div class="col-sm-4">
        <select name="psmType" id="psmType"  class="form-control">
            <option value="PSM 1">PSM 1</option>
            <option value="PSM 2">PSM 2</option>
            <option value="PTA">PTA</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="svDeadline">Supervisor Deadline:</label>
      <div class="col-sm-4">          
        <input type="date" class="form-control" id="svDeadline" placeholder="Select date..." name="svDeadline">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="evDeadline">Evaluator Deadline:</label>
      <div class="col-sm-4">          
        <input type="date" class="form-control" id="evDeadline" placeholder="Select date..." name="evDeadline">
      </div>
    </div>
    <br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Set Deadline</button>
      </div>
    </div>
  </form>
</div><br><br>



@endsection