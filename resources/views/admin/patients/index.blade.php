@extends('admin.layout.app')

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5 text-center">
            <h3 class="fw-bold text-uppercase">Lista de Pacientes</h3>
            <form class="input-group mb-4 d-flex justify-content-end">
                <div class="d-flex align-items-center justify-content-start">
                </div>
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" name="q" placeholder="Buscar paciente..." />
                </div>
                <button type="submit" class="btn --green_button text-white mb-3 mb-md-0">
                    <i class="fas fa-search" style="filter: drop-shadow(1px 1px 1px black);"></i>
                </button>
                <a href="{{ route('admin.dashboard.index') }}" class="btn ms-2 rounded btn-primary text-white me-0 me-md-2">
                    <i class="fas fa-hand-point-left" style="filter: drop-shadow(1px 1px 1px black);"></i> <span class="fw-bold">VOLTAR PARA DASHBOARD</span>
                </a>
            </form>
            <div class="table-responsive">
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
                        <td class="d-flex justify-content-between align-items-center"><a href="{{ route('admin.patients.showAppointments', $patient->id) }}"
                                class="fw-bold text-uppercase text-decoration-none rounded-0 text-dark"><i class="fas fa-book-open"></i></a>
                                <a href="{{ route('admin.patients.appointment', $patient->id) }}"
                                class="fw-bold text-uppercase text-decoration-none rounded-0 text-dark"><i
                                    class="fas fa-calendar-check"></i></a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9">Nenhuma informação encontrada</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
        {{ $patients->links() }}
    </div>
</div>

@endsection

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
@endpush
