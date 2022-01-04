<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(Patient $patients)
    {
        $patients = $patients->paginate(15);

        return view('admin.patients.index', compact('patients'));
    }

    public function appointment($id, Request $request, Patient $patient)
    {
        $patient = $patient->findOrFail($id);

        return view('admin.patients.appointment', compact("patient"));
    }
}