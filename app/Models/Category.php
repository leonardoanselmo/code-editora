<?php

namespace CodePub\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Bootstrapper\Interfaces\TableInterface;


class Category extends Model implements Transformable, TableInterface
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
