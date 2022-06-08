@extends('masterS')


@section('form')

<div class="alert alert-warning" role="alert" style="letter-spacing: 1px; margin:10px;">
    <strong>Reminder!</strong> Deadline for PSM 1 evaluation is <b>{{ $deadlinePsm1->svDeadline }}</b> (supervisor) and <b>{{ $deadlinePsm1->evDeadline }}</b> (evaluator).
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
</div>
<div class="alert alert-warning" role="alert" style="letter-spacing: 1px; margin:10px;">
    <strong>Reminder!</strong> Deadline for PSM 2 evaluation is <b>{{ $deadlinePsm2->svDeadline }}</b> (supervisor) and <b>{{ $deadlinePsm2->evDeadline }}</b> (evaluator).
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
</div>
<div class="alert alert-warning" role="alert" style="letter-spacing: 1px; margin:10px;">
    <strong>Reminder!</strong> Deadline for PTA evaluation is <b>{{ $deadlinePta->svDeadline }}</b> (supervisor) and <b>{{ $deadlinePta->evDeadline }}</b> (evaluator).
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
</div>
<br><br>

<center>


<div class='parent'>
        <div class='child'>
            <h3><b>Supervisor's Evaluation</b></h3><br>
            <h4><i>Evaluate as Supervisor</i></h4><br>
            <hr><br>
            <a href="svView"><button class="btn btn-default btn-lg">Supervisor Role</button></a>
        </div>
        <div class = "vertical"></div>
        <div class='child'>
            <h3><b>Evaluator's Evaluation</b></h3><br>
            <h4><i>Evaluate as Evaluator</i></h4><br>
            <hr><br>
            <a href="evView"><button class="btn btn-default btn-lg">Evaluator Role</button></a>
        </div>
</div>

<br>
</center>

@endsection