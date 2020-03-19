<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Treatment;

class TreatmentController extends Controller
{
    public function create(Patient $patient)
    { 
        // authenticate loged in user
        $user = auth()->user();
        
        return view('treatment.add-treatment', compact('patient'), compact('user'));
    }

    public function store(Patient $patient, Request $request)
    {
        // authenticate loged in user
        $user = auth()->user();

        //  create new treatment
        $patient->treatments()->create(request()->validate([
            'back'=>'required',
            'arms'=>'required',
            'legs'=>'required',
            'ass'=>'required',
            'extra'=>'nullable',
        ]));

        return redirect('/patients/'.$patient->id);
    }

    public function show(Patient $patient, Treatment $treatment)
    {
        // authenticate loged in user
        $user = auth()->user();

        // check if patient belongs to user
        if($user->id === $patient->user_id){
            return view('treatment.treatment', compact('patient', 'user', 'treatment'));
        }else{
            return view('403', compact('user'));
        }           
    }

    public function edit(Patient $patient, Treatment $treatment)
    {
        // authenticate loged in user
        $user = auth()->user();
        
        return view('treatment.edit-treatment', compact('patient', 'user', 'treatment'));
    }

    public function update(Patient $patient, Treatment $treatment, Request $request)
    {
        // authenticate loged in user
        $user = auth()->user();

        // update selected treatment
        $patient->treatments()->update(request()->validate([
            'back'=>'required',
            'arms'=>'required',
            'legs'=>'required',
            'ass'=>'required',
            'extra'=>'nullable',
        ]));

        return redirect('/patients');
    }

    public function destroy(Patient $patient, Treatment $treatment)
    {
        // authenticate loged in user
        $user = auth()->user();

        //  delete treatment
        $treatment->delete();

        return redirect('/patients');
    }
}
