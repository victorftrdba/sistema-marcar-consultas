<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DashboardRepository;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialty;
use App\Models\Phone;

class DashboardController extends Controller
{
    public function index(Specialty $specialties)
    {
        $specialties = Specialty::paginate(8);

        $patients = Patient::paginate(8);

        $doctors = Doctor::paginate(8);

        return view('admin.dashboard.index', compact('specialties', 'patients', 'doctors'));
    }

    public function searchSpecialty(Request $request)
    {
        $result = Specialty::where('name', 'like', '%' . $request->get('q') . '%')
        ->paginate(10);

        return response()->json($result);
    }

    public function storeSpecialty(Request $request, Specialty $specialty)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:specialties',
        ]);

        DashboardRepository::store($request, $specialty);

        return redirect()->route('admin.dashboard.index')->withSuccess([
            'success' => 'Especialidade criada com sucesso!'
        ]);
    }

    public function storeDoctor(Request $request, Doctor $doctor)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'crm' => 'required|string|unique:doctors',
            'specialty' => 'required|string',
        ]);

        DashboardRepository::store($request, $doctor);

        return redirect()->route('admin.dashboard.index')->withSuccess([
            'success' => 'Médico adicionado com sucesso!'
        ]);
    }

    public function storePatient(Request $request, Patient $patient, Phone $phones)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'cpf' => 'required|string|unique:patients',
            'email' => 'required|email',
            'zipcode' => 'required|string',
            'address' => 'required|string',
            'number' => 'required',
            'phone' => 'required',
        ]);

        DashboardRepository::storeMany($request, $patient, $phones);

        return redirect()->route('admin.dashboard.index')->withSuccess([
            'success' => 'Paciente adicionado com sucesso!'
        ]);
    }
}