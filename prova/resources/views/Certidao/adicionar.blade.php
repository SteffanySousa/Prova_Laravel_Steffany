@extends('layout.site')

@section('titulo', 'Adicionar Certidao')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Certidão</h3>
        <div class="row">
            <form action="{{ route('certidao.salvar') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('certidao.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()