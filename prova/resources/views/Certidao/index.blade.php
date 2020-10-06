@extends('layout.site')

@section('titulo', 'Certidao')

@section('conteudo')
    <div class="container">
        <h3>Lista de Certidões</h3>
        @if (!@empty($notificacao))       
        <div class="alert alert-success">
            {{ $notificacao }}
        </div>           
        @endif
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo de certidão</th>
                        <th scope="col">Nome envolvido 1</th>
                        <th scope="col">Nome envolvido 1</th>
                        <th scope="col">Data da certidão</th>
                        <th scope="col">Nome do tabelião</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($certidoes as $certidao)
                        <tr>
                            <td>{{ $certidao->id }}</td>
                            <td>{{ $certidao->tipo_de_certidao }}</td>
                            <td>{{ $certidao->nome_envolvido1 }}</td>
                            <td>{{ $certidao->nome_envolvido2 }}</td>
                            <td>{{ $certidao->data_da_certidao }}</td>
                            <td>{{ $certidao->nome_do_tabeliao }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('certidao.editar', $certidao->id)}}">Editar</a>
                                <form action="{{ route('certidao.deletar', $certidao->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
         <div class="row">
            <a class="btn btn-success" href="{{ route('produtos.adicionar') }}">Adicionar</a>
        </div>
    </div>
@endsection