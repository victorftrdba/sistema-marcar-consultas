@extends('admin.layout.app')

@section("content")

<div class="container mt-5">
    <div class="row mb-5">
        <h2 class="text-uppercase fw-bold mb-5">Consultas de {{ $patient->name }} | Idade: {{ $patient->age }} anos</h2>
        @forelse($patient->appointments as $appointment)
        <div class="col-12 col-md-4 mb-4 mb-md-5 mb-md-0">
            <div class="card text-center">
                <div class="card-header fw-bold">
                    Consulta marcada para:  {{ $appointment->consultation_time->format('d/m/Y H:i:s') }}
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Dr. {{ $appointment->doctor->name }}</h5>
                    <p class="card-text fw-bold">{{ $appointment->doctor->specialty }}</p>
                    @if($patient->age < 12)
                    <p class="card-text fw-bold">CPF do Responsável pelo Menor <br/> {{ $appointment->responsible_cpf }}</p>
                    @endif
                </div>
                <div class="card-footer text-muted">
                    Agendado dia: {{ $appointment->created_at->format('d/m/Y H:i:s') }}
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger text-uppercase text-center fw-bold">
            Nenhuma consulta encontrada
        </div>
        @endforelse
    </div>
    <a class="btn btn-primary rounded-0 me-2 fw-bold" href="{{ route('admin.patients.index') }}">Voltar para Lista de Pacientes</a>
</div>
@endsection
