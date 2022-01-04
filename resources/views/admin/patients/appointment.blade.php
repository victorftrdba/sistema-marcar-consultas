@extends('admin.layout.app')

@section("content")

<div class="container mt-5">
    <form class="row" action="{{ route('admin.patients.storeAppointment', $patient->id) }}" method="POST">
        @csrf
        <h2 class="fw-bold text-uppercase mb-5">Agendamento de Consulta</h2>
        <div class="col-6 text-center mb-5">
            <label class="fw-bold text-uppercase mb-2" for="doctor_id">Médico</label>
            @if($patient->age > 12)
            <select id="doctor_search" name="doctor_id" class="form-control">
                <option value="Pesquise por uma especialidade">Digite um CRM ou Especialidade...</option>
            </select>
            @else
            <select name="doctor_id" class="form-select">
            @forelse ($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
            @empty
                <option>Nenhuma opção encontrada!</option>
            @endforelse
            </select>
            @endif
        </div>
        <div class="col-6 text-center mb-5">
            <label class="fw-bold text-uppercase mb-2" for="patient">Paciente</label>
            <input type="text" class="form-control" value="{{ $patient->name }}" disabled />
        </div>
        <div class="col-6 text-center">
            <label class="fw-bold text-uppercase mb-2" for="doctor_id">Dia e Hora da Consulta</label>
            <input type="datetime-local" name="consultation_time" class="form-control" value="{{ $patient->name }}" />
        </div>
        @if($patient->age < 12)
        <div class="col-6 text-center mb-4">
            <label class="fw-bold text-uppercase mb-2" for="responsible_cpf">CPF do Responsável</label>
            <input type="text" class="form-control" name='responsible_cpf' id="responsible_cpf" />
        </div>
        @endif
        <div class="col-12 d-flex justify-content-end">
            <a class="btn btn-primary rounded-0 me-2 fw-bold" href="{{ route('admin.patients.index') }}">Voltar para Lista de Pacientes</a>
            <button type="submit" class="btn --green_button text-white fw-bold rounded-0">Agendar</button>
        </div>
    </form>
</div>

@endsection

@push('js')
<script src="{{ asset('js/appointment.js') }}"></script>
@endpush
