@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar categoria</h3>        
            
            {!! Form::model($category, [
                'route' => ['categories.update', 'category' => $category->id 
                ], 'class' => 'form', 'method' => 'PUT' ]) !!}

                @include('categories._form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection

