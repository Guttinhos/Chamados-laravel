<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chamados - ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

<div class="container">

    <div class="row mt-5">
        <div class="col-md-12">
            <h1>CHAMADOS - ADM</h1>
            <hr>
        </div>
    </div>

    <!-- Filtro -->
@include("chamados.partials.filtro-back-office")

<!-- Listagem -->
    <div class="row mt-5">
        <div class="col-md-12">
            @if(session()->has('sucesso'))
                <div class="alert alert-success">
                    {{ session()->get('sucesso') }}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" style="width: 50px">ID</th>
                    <th scope="col">ASSUNTO</th>
                    <th scope="col" style="width: 150px">STATUS</th>
                    <th scope="col" style="width: 200px">ÚLTIMA ALTERAÇÃO</th>
                    <th scope="col" style="width: 50px"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($chamados as $chamado)
                    <tr>
                        <td>{{$chamado->id}}</td>
                        <td>{{$chamado->assunto}}</td>
                        <td class="{{$chamado->status === 'aberto' ? 'text-success' : 'text-danger' }}">{{strtoupper($chamado->status)}}</td>
                        <td>{{$chamado->created_at->format("d/m/Y")}}</td>
                        <td>
                            <a href="{{route('abrir-resposta')}}"><i class="bi bi-pc-display-horizontal"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
