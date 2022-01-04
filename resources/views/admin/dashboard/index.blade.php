@extends('admin.layout.app')

@section('content')

@include('admin.dashboard.modals._add_patient')
@include('admin.dashboard.modals._add_doctor')
@include('admin.dashboard.modals._add_specialty')

<section class="--dashboard_section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button"
                        class="btn --green_button text-uppercase fw-bold text-white dropdown-toggle rounded-0"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Opções
                    </button>
                    <ul class="dropdown-menu rounded-0" aria-labelledby="btnGroupDrop1">
                        <li><a href="{{ route('admin.patients.index') }}" class="dropdown-item" href="#"><button type="button"
                                    class="btn fw-bold text-uppercase --modal_button">Ver pacientes <i
                                        class="fas fa-lg fa-hospital-user"></i></button></a></li>
                        <li><a class="dropdown-item" href="#"><button type="button"
                                    class="btn fw-bold text-uppercase --modal_button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3">Nova especialidade <i
                                        class="fas fa-lg fa-plus-square"></i></button></a></li>
                        <li><a class="dropdown-item" href="#"><button type="button"
                                    class="btn fw-bold text-uppercase --modal_button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">Novo médico <i
                                        class="fas fa-lg fa-plus-square"></i></button></a></li>
                        <li><a class="dropdown-item" href="#"><button type="button"
                                    class="btn fw-bold text-uppercase --modal_button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Novo paciente <i
                                        class="fas fa-lg fa-plus-square"></i></button></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="--dashboard_tables">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5 text-center">
                <h3 class="fw-bold text-uppercase">Últimas especialidades adicionadas</h3>
                <table class="table table-bordered">
                    <thead>
                        <th>Nome</th>
                    </thead>
                    <tbody>
                        @forelse($specialties as $specialty)
                        <tr>
                            <td>{{ $specialty->name ?? '' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>Nenhuma informação encontrada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-12 mt-5 mb-5 text-center">
                <h3 class="fw-bold text-uppercase">Últimos médicos adicionados</h3>
                <table class="table table-bordered">
                    <thead>
                        <th>Nome</th>
                        <th>Especialidade</th>
                        <th>CRM</th>
                    </thead>
                    <tbody>
                        @forelse($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->name ?? '' }}</td>
                            <td>{{ $doctor->specialty ?? '' }}</td>
                            <td>{{ $doctor->crm ?? '' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>Nenhuma informação encontrada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-12 mt-5 mb-5 text-center">
                <h3 class="fw-bold text-uppercase">Últimos pacientes adicionados</h3>
                <table class="table table-bordered">
                    <thead>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>CPF</th>
                        <th>E-mail</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Criado em</th>
                        <th>Número</th>
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
                            <td>{{ $patient->created_at->format('d/m/Y H:i:s') }}</td>
                            <td>{{ $patient->number ?? '' }}</td>
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
</section>

@push('js')
@if(session('success'))
@foreach(session('success') as $success)
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{!! $success !!}",
        showConfirmButton: false,
        timer: 1500
    })

</script>
@endforeach
@endif

<script src="{{ asset('js/app.js') }}"></script>
@endpush

@endsection
