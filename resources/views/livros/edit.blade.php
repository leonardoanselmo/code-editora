@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar livro</h3>        
            
            {!! Form::model($livro, [
                'route' => ['livros.update', 'livro' => $livro->id 
                ], 'class' => 'form', 'method' => 'PUT' ]) !!}
                    
                    @include('livros._form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection

