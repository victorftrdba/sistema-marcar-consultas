@extends('admin.layout.app')

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5 text-center">
                <h3 class="fw-bold text-uppercase">Lista de Pacientes</h3>
                <table class="table table-bordered">
                    <thead>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>CPF</th>
                        <th>E-mail</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Número</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        @forelse($patients as $patient)
                        <tr>
                            <td class="text-uppercase">{{ $patient->name ?? '' }}</td>
                            <td>{{ $patient->age ?? '' }}</td>
                            <td>{{ $patient->cpf ?? '' }}</td>
                            <td class="text-lowercase">{{ $patient->email ?? '' }}</td>
                            <td>{{ $patient->zipcode ?? '' }}</td>
                            <td>{{ $patient->address ?? '' }}</td>
                            <td>@foreach($patient->phones as $phone) <div>{{ $phone->number }}</div> @endforeach</td>
                            <td>{{ $patient->number ?? '' }}</td>
                            <td><a href="{{ route('admin.patients.appointment', $patient->id) }}" class="fw-bold text-uppercase text-decoration-none btn btn-secondary rounded-0 text-white"><i class="fas fa-calendar-check"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td>Nenhuma informação encontrada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
    </div>
</div>

@endsection
