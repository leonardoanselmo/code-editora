<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;


class Category extends Model implements TableInterface
{
    protected $fillable = [
        'name'
    ];

    public function getTableHeaders()
    {
        return ['ID', 'Categoria'];        
    }

    public function getValueForHeader($header)
    {
        switch ($header){
            case 'ID':
                return $this->id;
            case 'Categoria':
                return $this->name;
        }
    }
}
