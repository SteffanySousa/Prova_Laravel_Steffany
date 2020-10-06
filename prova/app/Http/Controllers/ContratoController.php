<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index(Request $req)
    {
        $contratos = Contrato::all();
        $notificacao = $req->session()->get ('notificacao');
        return view('contrato.index', compact ('contratos', 'notificacao'));
    }

    public function adicionar()
    {
        return view('contrato.adicionar');
    }

    public function salvar(Request $req)
    {

        $contrato = $req->all();


        Contrato::create($contrato);

        $req->session()
        ->flash(
            'notificacao',
            "O contrato de $req->tipo_do_contrato foi adicionado."
        );

          return redirect()->route('contrato');

    }

    public function editar($id)
    {
        $contrato = Contrato::find($id);

        return view('contrato.editar', compact('contrato'));

    }

    public function atualizar(Request $req, $id)
    {
        $contrato = $req->all();

        $contratoSelecionado = Certidao::find($id);
        $contratoSelecionado->update($contrato);


        $req->session()
            ->flash(
                'notificacao',
                "O contrato de $contratoSelecionado->tipo_do_contrato foi atualizado."
            );

        return redirect()->route('contrato');
    }

    public function deletar(Request $req, $id)
    {
        $contrato= Contrato::find($id);
        $contrato->delete();

        $req->session()
        ->flash(
            'notificacao',
            "O contrato de $produto->tipo_do_contrato removido."
        );

        return redirect()->route('contrato');
    }
}
