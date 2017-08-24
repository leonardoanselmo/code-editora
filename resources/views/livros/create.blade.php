@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo livro</h3>         
            
            {!! Form::open(['route' => 'livros.store', 'class' => 'form' ]) !!}

                @include('livros._form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection

