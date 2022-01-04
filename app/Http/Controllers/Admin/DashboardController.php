<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialty;

class DashboardController extends Controller
{
    public function index()
    {
        $specialties = Specialty::get();

        return view('admin.dashboard.index', compact('specialties'));
    }

    public function storeSpecialty(Request $request)
    {
        dd($request->all());
    }

    public function storeDoctor(Request $request)
    {
        dd($request->all());
    }

    public function storePatient(Request $request)
    {
        dd($request->all());
    }
}