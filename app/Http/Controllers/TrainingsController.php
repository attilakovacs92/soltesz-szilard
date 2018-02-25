<?php

namespace App\Http\Controllers;

use App\Training;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainingsController extends Controller
{
    public function index()
    {
    	$trainings = Training::orderBy('started_at', 'desc')->get();
    	$today = Carbon::now('Europe/London')->format('Y-M-d');

    	return view('trainings.index', compact('trainings', 'today'));
    }

    public function show(Training $training)
    {
    	return view('trainings.show', compact('training'));
    }
}
