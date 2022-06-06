@extends('masterC')

@section('menu')

<style>
    label {
        padding: 4px 12px 12px 0;
        display: inline-block;
    }

    /* Style the submit button */
    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }
</style>

<div class="container">
  <h2>Set Deadline</h2>
  <form class="form-horizontal" action="" method="POST">
      @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="psmType">PSM Type:</label>
        
      <div class="col-sm-10">
        <select name="psmType" id="psmType"  class="form-control">
            <option value="PSM 1">PSM 1</option>
            <option value="PSM 2">PSM 2</option>
            <option value="PTA">PTA</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="svDeadline">Supervisor Deadline:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="svDeadline" placeholder="Select date..." name="svDeadline">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="evDeadline">Evaluator Deadline:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="evDeadline" placeholder="Select date..." name="evDeadline">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Set Deadline</button>
      </div>
    </div>
  </form>
</div>



@endsection