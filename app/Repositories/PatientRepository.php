<?php

namespace App\Repositories;

use App\Models\Doctor;

class PatientRepository {
    public static function store($request, $model, $id)
    {
        $model->create([
            'consultation_time' => $request->get('consultation_time'),
            'doctor_id' => $request->get('doctor_id'),
            'patient_id' => $id,
            'responsible_cpf' => $request->get('responsible_cpf') ?? null,
        ]);
    }
}