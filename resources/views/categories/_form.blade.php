{!! Html::openFormGroup('name', $errors) !!}
    {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! Form::error('name', $errors) !!}
{!! Html::closeFormGroup() !!} 

{!! Html::openFormGroup() !!}
    {!! Form::submit('Salvar categoria', ['class' => 'btn btn-primary']) !!}
{!! Html::closeFormGroup() !!}