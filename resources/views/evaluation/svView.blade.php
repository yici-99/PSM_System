@extends('masterS')

@section('menu')

<div class="container mt-2">
  <h2>Manage Evaluation</h2>

  <div class="d-flex flex-column align-items-end">
    <h4>Deadline</h4>
    <h4>Date</h4>
  </div>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#psm1">PSM 1</a></li>
    <li><a data-toggle="tab" href="#psm2">PSM 2</a></li>
    <li><a data-toggle="tab" href="#pta">PTA</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade in active" id="psm1">
      <h5>psm 1</h5>
        <table class="table table-light">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Matric No</th>
              <th scope="col">Name</th>
              <th scope="col">SV Marks</th>
              <th scope="col">Evaluator Marks</th>
              <th scope="col">Total Marks</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="psm2">
    <h5>psm 2</h5>
        <table class="table table-light">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Matric No</th>
              <th scope="col">Name</th>
              <th scope="col">SV Marks</th>
              <th scope="col">Evaluator Marks</th>
              <th scope="col">Total Marks</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
    </div>

    <div class="tab-pane fade" id="pta">
    <h5>pta</h5>
        <table class="table table-light">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Matric No</th>
              <th scope="col">Name</th>
              <th scope="col">SV Marks</th>
              <th scope="col">Evaluator Marks</th>
              <th scope="col">Total Marks</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection