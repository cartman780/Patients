<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use App\Treatment;

class PatientController extends Controller
{
    public function index()
    {
        // relate to current user
        $user = auth()->user();

        return view('patient.patients', compact('user'));
    }

    public function create()
    {
        return view('patient.add-patient');
    }

    public function store(Request $request)
    {
        // authenticate loged in user
        $user = auth()->user();
        
        // create new patient
        $patient = $user->patients()->create(request()->validate([
            'name'=>'required|min:3',
            'last_name'=>'required|min:3',
            'birth'=>'nullable',
            'email'=>'required|email',
            'phone'=>'nullable',
            'extra'=>'nullable',
        ]));

        return redirect('/patients');
    }

    public function show(Patient $patient)
    {
        // authenticate logged in user
        $user = auth()->user();

        // make an array for the data per type
        $newArray = array();

        // get all treatments from that patient in descending order
        $treatments = Treatment::where('id', $patient)->orderBy('created_at', 'desc');

        // make a buffer for previous values in the array
        $buffer = array();
        
        //  treatment type
        foreach ($patient->treatments as $treatment) {
            
            // get treatments types from model
            foreach(Treatment::getTypes() as $type => $typeNL){
                
                // set default value if buffer is not set
                if (!isset($buffer[$type])) {
                    $buffer[$type] = 1;
                }
                
                // change color if value is les or more than last
                if ($treatment->$type > $buffer[$type]) {
                    $color = "red";
                }else if ($treatment->$type == $buffer[$type]){
                    $color = "orange";
                }else if ($treatment->$type < $buffer[$type]){
                    $color = "green";
                }

                // Make an array for treatmenttypes
                $newArray[$typeNL][] = [
                    'score' => $treatment->$type,
                    'date' => $treatment->updated_at,
                    'color' => $color,
                ];
                
                // add value to buffer so the next value can check if it's higher or lower.
                $buffer[$type] = $treatment->$type;
            }
        }
        
        // check if loged in user
        if($user->can('view', $patient)){
            return view('patient.patient', compact('patient', 'newArray', 'treatments'));
        }else{
            return view('403', compact('user'));
        }       
    }

    public function edit(Patient $patient)
    {
        // authenticate logged in user
        $user = auth()->user();
        // can the loged in user do this?(policy)
        if($user->can('update', $patient)){
            return view('patient.edit-patient', compact('patient', 'user'));
        }
        return view('403');
    }

    public function update(Request $request)
    {
        // authenticate loged in user
        $user = auth()->user();
        // $this->authorize('update', $patient);

        // update patient
        $patient = $user->patients()->update(request()->validate([
            'name'=>'required|min:3',
            'last_name'=>'required|min:3',
            'birth'=>'nullable',
            'email'=>'required|email',
            'phone'=>'nullable',
            'extra'=>'nullable',
        ]));

        return redirect('/patients');
    }

    public function destroy(Patient $patient)
    {
        // authenticate loged in user
        $user = auth()->user();
        if($user->can('view', $patient)){
            //  delete user
            $patient->delete();
        }
        return view('403');
        
        return redirect('/patients');
    }
}
