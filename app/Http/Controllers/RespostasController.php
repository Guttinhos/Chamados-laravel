<?php

namespace App\Http\Controllers;

use App\Models\RespostaChamado;
use Illuminate\Http\Request;

class RespostasController extends Controller
{
    public function abrirResposta()
    {
        return view('chamados.back-office.back-office-respostas');
    }

    public function gravarResposta(Request $request)
    {
        $resposta = new RespostaChamado();
        $resposta->resposta = $request->input('resposta');

        $resposta->save();
    }
}
