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
    {!! Button::primary('Salvar livro')->submit() !!}    
{!! Html::closeFormGroup() !!}