@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <h3>Listagem de livros</h3>
       {!! Button::primary('Novo livro')->asLinkTo(route('livros.create')) !!}       
    </div>
    <div class="row">

        {!! 
            Table::withContents($livros->items())->striped()->hover()->condensed()
            ->callback('Ações', function($field, $livros){
                $linkEdit = route('livros.edit', ['livros' => $livros->id]);
                $linkDestroy = route('livros.destroy', ['livros' => $livros->id]);                
                $deleteForm = "delete-form-{$livros->id}";
                $form = Form::open(['route' => 
                            ['livros.destroy', 'livros' => $livros->id],
                             'method' => 'DELETE', 'id' => $deleteForm, 'style' => 'display:none' ]).
                             Form::close();
                $anchorDestroy = Button::link('Excluir')->asLinkTo($linkDestroy)->addAttributes([
                    'onclick' => "event.preventDefault();document.getElementById(\"{$deleteForm}\").submit();"
                    ]);                              

                return "<ul class=\"list-inline\">".
                            "<li>".Button::link('Editar')->asLinkTo($linkEdit)."</li>".
                            "<li>|</li>".
                            "<li>".$anchorDestroy."</li>".
                       "</ul>".
                       $form;
            })
        !!}
        
        {{ $livros->links() }}
    </div>
</div>
@endsection