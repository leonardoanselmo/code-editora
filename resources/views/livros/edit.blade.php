@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar livro</h3>        
            
            {!! Form::model($livro, [
                'route' => ['livros.update', 'livro' => $livro->id 
                ], 'class' => 'form', 'method' => 'PUT' ]) !!}
                
            <div class="form-group">
                {!! Form::label('title', 'Título') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}

                {!! Form::label('subtitle', 'Sub-titulo') !!}
                {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}

                {!! Form::label('price', 'Preço') !!}
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
            </div>  

            <div class="form-group">
                {!! Form::submit('Salvar livro', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection

