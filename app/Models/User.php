<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile'
    ];

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    protected $hidden = [
        'user_id',
        'password',
        'remember_token',
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'user_id','user_id');
    }
}
