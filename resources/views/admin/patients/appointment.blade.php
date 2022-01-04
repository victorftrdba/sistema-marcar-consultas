@extends('admin.layout.app')

@section("content")

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="fw-bold text-uppercase mb-5">Agendamento de Consulta</h2>
            <select id="doctor_search" name="q">
                <option value="Pesquise por uma especialidade">Pesquise por uma especialidade</option>
            </select>
        </div>
    </div>
</div>

@endsection
