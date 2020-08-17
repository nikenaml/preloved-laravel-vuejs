<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'products_id', 'users_id', 'rating'
    ];

    protected $hidden = [

    ];
}
