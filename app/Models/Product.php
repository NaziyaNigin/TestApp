<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'products';

    protected $primaryKey = 'product_id';

    protected $hidden = ['product_id','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','user_id');
    }
}

