<?php

namespace App\Http\Controllers;

use App\FormResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index() {
        return view('form.index');
    }

    public function store(Request $request) {
        $form = new FormResult;
        $form->user_name = Auth::user()->name;
        $form->user_id = Auth::User()->id;
        $form->creativity = $request->q1 + $request->q2;
        $form->autonomy = $request->q3;
        $form->rigor = $request->q4;
        $form->teamwork = $request->q5 + $request->q6;
        $form->evaluation_method = $request->q7 + $request->q8;
        $form->digital = $request->q9 + $request->q10;
        $form->science = $request->q11 + $request->q12;
        $form->literature = $request->q13;
        $form->foreign_lang = $request->q14 + $request->q15;
        $form->total_score = $form->creativity + $form->autonomy + $form->rigor + $form->teamwork + $form->evaluation_method + $form->digital + $form->science + $form->literature + $form->foreign_language;
        $form->save();

        return redirect('home');
    }
}
