<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChamadosFormRequest;
use App\Models\Chamado;
use Illuminate\Support\Facades\DB;


class ChamadosController extends Controller
{
    public function listarTodos()
    {
        $chamados = Chamado::all();

        return view('chamados.listagem')->with('chamados', $chamados);
    }

    public function listarAdmChamados()
    {
        $chamados = Chamado::all();

        return view('chamados.back-office.back-office-chamados')->with('chamados', $chamados);

    }

    public function abrirChamado()
    {
        return view('chamados.abrir-chamado');
    }

    public function gravarChamado(ChamadosFormRequest $request)
    {

        $chamado = new Chamado();
        $chamado->assunto = $request->input('assunto');
        $chamado->dominio_relacionado = $request->input('dominio_relacionado');
        $chamado->tipo_contato = $request->input('tipo_contato');
        $chamado->url_dificuldade = $request->input('url_dificuldade');
        $chamado->telefone_contato = $request->input('telefone_contato');
        $chamado->mensagem = $request->input('mensagem');

        if ($chamado->anexo = $request->file('anexo')->isValid()) {
            $request->file('anexo')->store('anexo/chamados');
        }
        $chamado->save();

        session()->flash('sucesso', 'Registro gravado com sucesso!');

        return redirect()->route('listagem-de-chamados');

    }

    public function meusChamados()
    {
        return view('chamados.chamados');
    }

    public function updateChamadoStatus($id, $request)
    {
        $chamado = Chamado::find($id);
        $chamado->status = "Aguardando RespostaChamado do administrador";
        $chamado->save;

        return back()->with('success', 'status do chamado atualizado com sucesso');
    }
}
