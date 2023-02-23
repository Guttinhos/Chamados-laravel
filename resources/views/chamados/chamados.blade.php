<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Chamados</title>
</head>
<body>

    <div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h1><span class="font-weight-bold">CHAMADOS</span></h1>
            <hr>
            <a class="btn btn-warning mt-3 mb-5"  href="{{route('listagem-de-chamados')}}"><i class="bi bi-arrow-90deg-left"> VOLTAR</i></a>
        </div>
        <div class="col-md-12 d-flex justify-content-center align-items-center mt-5">
            <h1><span class="font-weight-bold">#1</span> Migração de E-mails</h1>
            <hr>
        </div>
        <div class="d-flex flex-column bg-secondary text-white">
            <div class="p-2">
                <span class="font-weight-bold">STATUS:</span> <span class="font-weight-bold text-danger">FECHADO</span>
            </div>
            <div class="p-2">
                <span class="font-weight-bold">CATEGORIA:</span> <span class="font-weight-bold">COBRANÇAS</span>
            </div>
            <div class="p-2">
                <span class="font-weight-bold">DOMÍNIOS:</span>
            </div>
        </div>
    </div>
        <div class="d-flex flex-column mt-5 ">
            <div class="p-2 bg-light">
                <h5>Ricardo de melo</h5>
                <p>26/01/2023</p>
                <p>19:13:07</p>
           <div class="p-2 ml-auto">
                    <p>Desculpe, neste momento nao foi possivel atender sua solicitação.</p>
                </div>
            </div>

            <hr>
            <div class="p-2">
                <h5 class="text-secondary">Irineu voce nao sabe nem eu</h5>
                <p class="text-secondary">27/01/2023</p>
                <p class="text-secondary">20:13:07</p>
            </div>
            <div class="p-2 ml-auto">
                <p class="text-secondary">Desculpe, neste momento nao foi possivel atender sua solicitação.</p>
            </div>
            <hr>
            <div>
                <p>Seu chamado foi resolvido?</p>
                <button type="submit" class="btn btn-success"><a><i class="bi bi-hand-thumbs-up"> Sim</i></a></button>
                <button type="submit" class="btn btn-danger"><a><i class="bi bi-emoji-frown"> Não</i></a></button>
                <hr>
            </div>

            <div class="col-md-12 d-flex justify-content-center align-items-center mt-5">
                <h1><span class="font-weight-bold">#2</span> Comprovante</h1>
                <hr>
            </div>
            <div class="d-flex flex-column bg-dark text-white">
                <div class="p-2">
                    <span class="font-weight-bold">STATUS:</span> <span class="font-weight-bold text-success">RESOLVIDO</span>
                </div>
                <div class="p-2">
                    <span class="font-weight-bold">CATEGORIA:</span> <span class="font-weight-bold">COBRANÇAS</span>
                </div>
                <div class="p-2">
                    <span class="font-weight-bold">DOMÍNIOS:</span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column mt-5 ">
            <div class="p-2 bg-light">
                <h5>Bergson Mauricio</h5>
                <p>26/01/2023</p>
                <p>19:13:07</p>
                <div class="p-2 ml-auto">
                    <p>Desculpe, neste momento nao foi possivel atender sua solicitação.</p>
                </div>
            </div>

            <hr>
            <div class="p-2">
                <h5 class="text-secondary">Jeff dos santos</h5>
                <p class="text-secondary">27/01/2023</p>
                <p class="text-secondary">20:13:07</p>
            </div>
            <div class="p-2 ml-auto">
                <p class="text-secondary">Seu chamado foi resolvido :).</p>
            </div>
            <hr>
            <div>
                <p>Seu chamado foi resolvido?</p>
                <button type="submit" class="btn btn-success"><a><i class="bi bi-hand-thumbs-up"> Sim</i></a></button>
                <button type="submit" class="btn btn-danger"><a><i class="bi bi-emoji-frown"> Não</i></a></button>
                <hr>
            </div>
        </div>




</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
