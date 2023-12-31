<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;


class Article extends EloquentModel
{
    use HasFactory;

    protected $collection = 'articles';

    public function article(){
        return self::all();
    }

}
