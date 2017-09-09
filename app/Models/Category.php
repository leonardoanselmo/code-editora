<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


class Category extends Model implements Transformable
{

    use TransformableTrait;

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
