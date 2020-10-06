<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabeliaoController extends Controller
{
    public function index(Request $req)
    {
        $tabelioes = Tabeliao::all();
        $notificacao = $req->session()->get ('notificacao');
        return view('tabeliao.index', compact ('tabelioes', 'notificacao'));
    }

    public function adicionar()
    {
        return view('tabeliao.adicionar');
    }

    public function salvar(Request $req)
    {

        $tabeliao = $req->all();


        Contrato::create($tabeliao);

        $req->session()
        ->flash(
            'notificacao',
            "O tabelião $req->nome_tabeliao foi adicionado."
        );

          return redirect()->route('tabeliao');

    }

    public function editar($id)
    {
        $tabeliao = Tabeliao::find($id);

        return view('tabeliao.editar', compact('tabeliao'));

    }

    public function atualizar(Request $req, $id)
    {
        $contrato = $req->all();

        $tabeliaoSelecionado = Tabeliao::find($id);
        $tabeliaoSelecionado->update($tabeliao);


        $req->session()
            ->flash(
                'notificacao',
                "O tabeliao $contratoSelecionado->nome_tabeliao foi atualizado."
            );

        return redirect()->route('tabeliao');
    }

    public function deletar(Request $req, $id)
    {
        $tabeliao= Tabeliao::find($id);
        $tabeliao->delete();

        $req->session()
        ->flash(
            'notificacao',
            "O tabeliao $produto->nome_tabeliao removido."
        );

        return redirect()->route('tabeliao');
    }
}
