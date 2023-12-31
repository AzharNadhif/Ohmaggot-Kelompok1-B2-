<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;
use MongoDB\Laravel\Relations\HasMany;

class Role extends EloquentModel
{
    use HasFactory;

    protected $collection = "roles";

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    // public function user(): HasMany{
    //     return $this->hasMany(User::class);
    // }
}
