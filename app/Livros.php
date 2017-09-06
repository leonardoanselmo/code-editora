<?php

namespace App;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model implements TableInterface
{
    protected $fillable = [
        'title',
        'subtitle',
        'price',
        'user_id'
    ];

    public function livrosUsuarios(){
        return $this->belongsTo('App\User');
    }

    public function getTableHeaders()
    {
        return ['ID', 'Título', 'Sub-título', 'Preço'];
    }

    public function getValueForHeader($header)
    {
        switch ($header ){
            case 'ID':
                return $this->id;
                
            case 'Título': 
                return $this->title;
            
            case 'Sub-título':
                return $this->subtitle;

            case 'Preço':
                return $this->price;
        }
    }
}
