<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function deadline() {
        return view('evaluation.deadline');
    }

    public function storeDeadline() {

        error_log(request('psmType'));
        error_log(request('svDeadline'));
        error_log(request('evDeadline'));
        return redirect('/');
    }

    public function svEdit() {
        return view('evaluation.svEdit');
    }
}
