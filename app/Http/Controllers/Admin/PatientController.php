<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Repositories\PatientRepository;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $patients = Patient::orderBy('created_at', 'desc');

        if($request->has('q')) {
            $search = $request->get('q');

            $patients->where('name', 'like', '%'.$search.'%')
            ->orWhere('cpf', 'like', '%'.$search.'%')
            ->orWhere('email', 'like', '%'.$search.'%')
            ->orWhere('zipcode', 'like', '%'.$search.'%');
        }

        $patients = $patients->paginate(15);

        return view('admin.patients.index', compact('patients'));
    }

    public function appointment($id, Request $request, Patient $patient, Doctor $doctors)
    {
        $patient = $patient->findOrFail($id);

        $doctors = $doctors->where('specialty', 'Pediatria')->get();

        return view('admin.patients.appointment', compact("patient", "doctors"));
    }

    public function storeAppointment($id, Request $request, Appointment $appointment)
    {
        $this->validate($request, [
            'consultation_time' => 'required',
            'doctor_id' => 'required',
        ]);

        PatientRepository::store($request, $appointment, $id);

        return redirect()->route('admin.patients.index')->withSuccess([
            'success' => 'Consulta agendada com sucesso!'
        ]);

    }

    public function searchDoctor(Request $request)
    {
        $result = Doctor::where('specialty', 'like', '%' . $request->get('q') . '%')
        ->orWhere('crm', 'like', '%' . $request->get('q') . '%')
        ->paginate(10);

        return response()->json($result);
    }
}