<?php

namespace App\Http\Controllers\PermanentEmployee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SelfEvaluationController extends Controller
{
    public function displaySelfEvaluationForm() {
        return view('pe-pages.pe_self_evaluation');
    }
}