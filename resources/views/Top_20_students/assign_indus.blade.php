@extends('masterS')

@section('form')


<form>
<div class="center">  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" style="width:1000px">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" style="width:1000px">
    </div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:500px; height: 100px;"></textarea>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
  </div>
</form>
  <center>
@endsection