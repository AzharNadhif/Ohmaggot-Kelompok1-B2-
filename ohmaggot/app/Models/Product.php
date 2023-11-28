<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;
use MongoDB\Laravel\Relations\BelongsTo;

class Product extends EloquentModel
{
    use HasFactory;

    protected $collection = 'products';

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
