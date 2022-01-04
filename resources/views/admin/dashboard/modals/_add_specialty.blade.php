<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova Especialidade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.storeSpecialty') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-center">
                        <label for="name" class="col-form-label fw-bold text-uppercase">Nome da
                            Especialidade</label>
                        <input type="text" class="form-control" name="name" placeholder="Ex: Pediatria">
                    </div>
                    <div class="border-top mt-4">
                        <button type="submit"
                            class="btn text-uppercase rounded-0 text-white fw-bold --green_button mt-4">Salvar
                            Especialidade</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
