@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar livro</h3>        
            
            {!! Form::model($livro, [
                'route' => ['livros.update', 'livro' => $livro->id 
                ], 'class' => 'form', 'method' => 'PUT' ]) !!}
                    
                    {!! Html::openFormGroup('title', $errors) !!}
                        {!! Form::label('title', 'Título') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        {!! Form::error('title', $errors) !!}
                    {!! Html::closeFormGroup() !!} 

                    {!! Html::openFormGroup('subtitle', $errors) !!}
                        {!! Form::label('subtitle', 'Sub-titulo') !!}
                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                        {!! Form::error('subtitle', $errors) !!}
                    {!! Html::closeFormGroup() !!} 

                    {!! Html::openFormGroup('price', $errors) !!}
                        {!! Form::label('price', 'Preço') !!}
                        {!! Form::text('price', null, ['class' => 'form-control']) !!}
                        {!! Form::error('price', $errors) !!}  
                    {!! Html::closeFormGroup() !!}              

                    {!! Html::openFormGroup() !!}
                        {!! Form::submit('Salvar livro', ['class' => 'btn btn-primary']) !!}
                    {!! Html::closeFormGroup() !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection

