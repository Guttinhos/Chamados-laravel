<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Abrir Chamado</title>
</head>
<body>

<div class="container">

    <!-- Inicio -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h1>NOVO <strong>CHAMADO</strong> </h1>
            <hr>
            <p>Como podemos te ajudar? A equipe de atendimento ao cliente KingHost está pronta para auxiliar
            você. Por favor, informe todos os detalhes sobre sua necessidade ou dificuldade. Escolha a categoria
            mais adequada, seu chamado ja será encaminhado para uma equipe especializada. Quanto mais informações
            tivermos, mais rápido podemos te ajudar.
            </p>
            <a class="btn btn-warning mt-5 mb-5"  href="{{route('listagem-de-chamados')}}"><i class="bi bi-arrow-90deg-left"> VOLTAR</i></a>
        </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-9 d-flex justify-content-center align-items-center">
            <form  action="{{route('gravar-chamados')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="assunto" class="col-md-12 col-form-label"><strong>* Assunto:</strong></label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="assunto" name="assunto" >
                        <small class="form-text text-muted">Para agilizar a resposta, por favor seja claro quanto ao motivo do contato.</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="dominio_relacionado" class="col-md-12 col-form-label"><strong>* Dominio Relacionado:</strong></label>
                    <div class="col-md-7">
                        <select class="form-select" id="dominio_relacionado" name="dominio_relacionado" >
                            <option value="">-- Selecione --</option>
                            <option value="google">google</option>
                            <option value="telefone">Telefone</option>
                        </select>
                        <small class="form-text text-muted">Selecione para visualizar abaixo categorias relacionadas aos serviços utilizados.</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tipo_contato" class="col-md-12 col-form-label"><strong>* Tipo de contato:</strong></label>
                    <div class="col-md-7">
                        <select class="form-select" id="tipo_contato" name="tipo_contato">
                            <option value="">-- Selecione --</option>
                            <option value="e-mail">E-mail</option>
                            <option value="telefone">Telefone</option>
                        </select>
                        <small class="form-text text-muted">Selecione para visualizar abaixo categorias relacionadas aos serviços utilizados.</small>
                    </div>
                    <div class="row mb-3">
                        <label for="url_dificuldade" class="col-md-12 col-form-label"><strong>* URL da Dificuldade:</strong></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="url_dificuldade" name="url_dificuldade">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telefone_contato" class="col-md-12 col-form-label"><strong>* Telefone para contato:</strong></label>
                        <div class="col-md-7">
                            <input type="text"  placeholder="(00) 00000-0000" class="form-control" id="telefone_contato" name="telefone_contato">
{{--                            <input type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="(00) 00000-0000" class="form-control" id="telefone" name="telefone">--}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="anexo" class="col-md-12 col-form-label"><strong>* Anexo:</strong></label>
                        <div class="col-md-7">
                            <input type="file" data-browse="Selecionar arquivo" class=" primary form-control" id="anexo" name="anexo">
                            <small class="form-text text-muted">Os anexos permitidos são .jpg .gif .png .zip .rar .eml e .pdf</small>
                        </div>
                        <div class="row mb-3">
                            <label for="mensagem" class="col-md-12 col-form-label"><strong>* Mensagem:</strong></label>
                            <div class="col-md-7">
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="3"  ></textarea>
                                <small class="form-text text-muted">Caso seja necessária a realização de testes. por favor informe o <strong>usuário e senha</strong></small>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-success"><a><i class="bi bi-person-workspace" id="enviar-solicitacao"> ENVIAR SOLICITAÇÃO DE SUPORTE</i></a></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    document.querySelector('#telefone_contato').addEventListener("keypress", function (e) {
        let input = this.value;
        if (input.length === 0) {
            this.value += "(";
        } else if (input.length === 3) {
            this.value += ")";
        } else if (input.length === 9) {
            this.value += "-";
        }
        if (/\D/.test(String.fromCharCode(e.which))) {
            e.preventDefault();
        }
        if (input.length >= 14) {
            e.preventDefault();
        }
    });
</script>
</body>
</html>
