<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertidaoController extends Controller
{
    public function index(Request $req)
    {
        $certidoes = Certidao::all();
        $notificacao = $req->session()->get ('notificacao');
        return view('certidao.index', compact ('certidoes', 'notificacao'));
    }

    public function adicionar()
    {
        return view('certidao.adicionar');
    }

    public function salvar(Request $req)
    {

        $certidao = $req->all();


        Certidao::create($certidao);

        $req->session()
        ->flash(
            'notificacao',
            "A certidão de $req->tipo_de_certidao foi adicionada."
        );

          return redirect()->route('certidao');

    }

    public function editar($id)
    {
        $certidao = Certidao::find($id);

        return view('certidao.editar', compact('certidao'));

    }

    public function atualizar(Request $req, $id)
    {
        $certidao = $req->all();

        $certidaoSelecionada = Certidao::find($id);
        $certidaoSelecionada->update($certidao);


        $req->session()
            ->flash(
                'notificacao',
                "A certidão de $certidaoSelecionada->tipo_de_certidao foi atualizada."
            );

        return redirect()->route('certidao');
    }

    public function deletar(Request $req, $id)
    {
        $certidao= Certidao::find($id);
        $certidao->delete();

        $req->session()
        ->flash(
            'notificacao',
            "A certidão de $produto->tipo_de_certidao removida."
        );

        return redirect()->route('certidao');
    }
}
