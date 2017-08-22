@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <h3>Listagem de livros</h3>
       <a href="{{ route('livros.create') }}" class="btn btn-primary">Novo livro</a>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Sub-título</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
            @foreach($livros as $livro)
                <tr>
                    <td>{{ $livro->id }}</td>
                    <td>{{ $livro->title }}</td>
                    <td>{{ $livro->subtitle }}</td>
                    <td>{{ $livro->price }}</td>
                    <td>
                        <ul class="list-inline">
                            <li>
                                <a href="">Editar</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="">Excluir</a>
                            </li>
                        </ul>
                    </td>
                </tr>                    
            @endforeach
            </tbody>
        </table>

       
    </div>
</div>
@endsection