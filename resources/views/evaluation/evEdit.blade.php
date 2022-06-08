@extends('masterS')


@section('form')

<div class="container">
  <h2>Update Marks</h2><br>
  <form class="form-horizontal" action="{{ url('updateEvMarks/'.$result->resultID.'/'.$result->psmType) }}" id="selectform" method="POST">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="studentName">Name:</label>
      <div class="col-sm-10">
        <h4>{{ $result->studentName }}</h4>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="studentID">Matric No.:</label>
      <div class="col-sm-10">          
      <h4>{{ $result->studentID }}</h4>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="psmType">PSM Type:</label>
      <div class="col-sm-10">          
      <h4>{{ $result->psmType }}</h4>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="stdpsmtitle">Project Title:</label>
      <div class="col-sm-10">          
        <h4>{{ $result->stdpsmtitle }}</h4>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="evMark">Evaluation Marks:</label>
      <div class="col-sm-5">          
        <input type="number" step="0.01" class="form-control" id="evMark" value="{{ $result->evMark }}" name="evMark">
      </div>
    </div>
    <br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      <button class="btn btn-default" type="button" onclick="checkreset()">
            Reset
        </button>
        <button type="submit" class="btn btn-default" style="margin-left: 30px;">Update</button>
      </div>
    </div>
  </form>
</div><br><br>

<script>
  function checkreset(){
    if(confirm('Are you sure to Reset?')){
      document.getElementById('selectform').reset(); 
      document.getElementById('evMark').value = 0; 
      return false;
    }
  }
</script>

@endsection