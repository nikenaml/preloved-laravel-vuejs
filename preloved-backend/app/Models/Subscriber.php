<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_berlangganan','email_berlangganan'
    ];

    protected $hidden = [

    ];
}
