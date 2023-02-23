<div class="row mt-3">
    <div class="col-md-3">
        <a href="{{route('abrir-chamados')}}" class="btn btn-primary">ABRIR CHAMADO</a>
    </div>
    <div class="col-md-9">
        <p>Busca de chamados</p>

        <form action="">
            @csrf
            <div class="mb-3 row">
                <label for="id" class="col-md-2 col-form-label">ID do Chamado</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="id" name="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="assunto" class="col-md-2 col-form-label">Assunto</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="assunto" name="assunto">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-md-2 col-form-label">Status</label>
                <div class="col-md-8">
                    <select class="form-select" id="status" name="status">
                        <option value="all">Todos</option>
                        <option value="open">Abertos/Atualizados</option>
                        <option value="solved">Resolvidos</option>
                        <option value="waiting">Aguardando retorno</option>
                        <option value="closed">Fechados</option>
                    </select>
                </div>
            </div>

            <hr class="mt-4 mb-4">

            <button class="btn btn-warning" type="submit"><i class="bi bi-filter-circle"> Filtrar</i></button>
            <button class="btn btn-danger" type="reset"><i class="bi bi-eraser"></i> Limpar filtros</button>

        </form>

    </div>
</div>
