<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    function index(){
        return view('school.index');
    }

    function store(Request $request) {

        $school = new School;
        $school->user_id = Auth::user()->getAuthIdentifier();
        $school->name = $request->actual_school;
        $school->study_level = $request->degree;
        $school->positive = $request->positive;
        $school->negative = $request->negative;
        $school->note = $request->note;

        $school->save();

        return redirect()->route('form.index');
    }
}
