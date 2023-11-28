<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;
use MongoDB\Laravel\Relations\HasMany;

class Category extends EloquentModel
{
    use HasFactory;

    protected $collection = 'categories';

    public function product(): HasMany{
        return $this->hasMany(Product::class);
    }

}
