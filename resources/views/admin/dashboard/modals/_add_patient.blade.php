<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Paciente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.storePatient') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 text-center">
                                <label for="name" class="col-form-label fw-bold text-uppercase">Nome do
                                    Paciente</label>
                                <input type="text" class="form-control" name="name" placeholder="Ex: Nome Sobrenome">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 text-center">
                                <label for="cpf"
                                    class="col-form-label fw-bold text-uppercase">CPF</label>
                                <input type="text" class="form-control" name="cpf" placeholder="Ex: 000.000.000-00">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3 text-center">
                                <label for="cep" class="col-form-label fw-bold text-uppercase">CEP</label>
                                <input type="text" class="form-control" name="cep" placeholder="Ex: 00000-00">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3 text-center">
                                <label for="address" class="col-form-label fw-bold text-uppercase">Endereço</label>
                                <input type="text" class="form-control" name="address" placeholder="Ex: Rua, Avenida, Estrada ...">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3 text-center">
                                <label for="number" class="col-form-label fw-bold text-uppercase">Número</label>
                                <input type="number" min="0" class="form-control" name="number" placeholder="Ex: 120">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 text-center">
                                <label for="phone"
                                    class="col-form-label fw-bold text-uppercase">Telefone(s)</label>
                                <input type="text" class="form-control" name="phone[]" placeholder="Ex: (00) 00000-0000">
                            </div>
                        </div>
                        <div class="border-top mt-4">
                            <button type="submit"
                                class="btn text-uppercase rounded-0 text-white fw-bold --green_button mt-4">Salvar
                                Paciente</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
