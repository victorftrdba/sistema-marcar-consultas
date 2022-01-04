<?php

namespace App\Repositories;

class DashboardRepository {
    public static function store($request, $model)
    {
        $model->create($request->all());
    }

    public function storeMany($request, $model, $second_model)
    {
        $model->create($request->all());

        $patient_id = $model->where('cpf', $request->get('cpf'))->first();

        foreach($request->get('phone') as $phone) {
            $second_model->create([
                'number' => $phone,
                'patient_id' => $patient_id->id,
            ]);
        }
    }
}