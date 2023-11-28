<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
// use Jenssegers\Mongodb\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait, Notifiable;

    protected $collection = "users";
    protected $guarded = ['_id'];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    // protected $fillable = [
    //     'username',
    //     'email',
    //     'password',
    //     'role',
    // ];

    // Sesuaikan dengan kebutuhan aplikasi Anda
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];
}
