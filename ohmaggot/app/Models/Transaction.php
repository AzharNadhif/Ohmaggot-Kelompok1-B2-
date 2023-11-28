<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;

class Transaction extends EloquentModel
{
    use HasFactory;

    protected $collection = 'transactions';

    public function transaction(){
        return self::all();
        
    }
}
