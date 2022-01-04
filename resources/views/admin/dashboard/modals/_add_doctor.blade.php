<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Médico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.storeDoctor') }}" method='POST'>
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 text-center">
                                <label for="name" class="col-form-label fw-bold text-uppercase">Nome do
                                    Médico</label>
                                <input type="text" class="form-control" name="name" placeholder="Ex: Nome Sobrenome">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 text-center">
                                <label for="specialty" class="col-form-label fw-bold text-uppercase">Especialidades</label>
                                <select name="specialty" class="form-select">
                                    @forelse($specialties as $specialty)
                                    <option value="{{ $specialty->name ?? '' }}">{{ $specialty->name ?? '' }}</option>
                                    @empty
                                    <option value="Nenhuma especialidade encontrada">Nenhuma especialidade encontrada</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 text-center">
                                <label for="crm" class="col-form-label fw-bold text-uppercase">CRM</label>
                                <input type="text" id="crm" class="form-control" name="crm" placeholder="Ex: 00000000-0/BR">
                            </div>
                        </div>
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
