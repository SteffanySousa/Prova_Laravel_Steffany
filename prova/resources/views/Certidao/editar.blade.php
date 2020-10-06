@extends('layout.site')

@section('titulo', 'Editar Certidao')


@section('conteudo')
    <div class="container">
        <h3>Editar Certidão</h3>
        <div class="row">
            <form action="{{ route('certidao.atualizar', $certidao->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('certidao.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()