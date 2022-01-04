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
                    <button id="btnGroupDrop1" type="button" class="btn --green_button text-uppercase fw-bold text-white dropdown-toggle rounded-0"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Opções
                    </button>
                    <ul class="dropdown-menu rounded-0" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="#"><button type="button" class="btn fw-bold text-uppercase --modal_button" data-bs-toggle="modal" data-bs-target="#exampleModal3">Nova especialidade <i class="fas fa-lg fa-plus-square"></i></button></a></li>
                        <li><a class="dropdown-item" href="#"><button type="button" class="btn fw-bold text-uppercase --modal_button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Novo médico <i class="fas fa-lg fa-plus-square"></i></button></a></li>
                        <li><a class="dropdown-item" href="#"><button type="button" class="btn fw-bold text-uppercase --modal_button" data-bs-toggle="modal" data-bs-target="#exampleModal">Novo paciente <i class="fas fa-lg fa-plus-square"></i></button></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
