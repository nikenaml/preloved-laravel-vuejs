<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfer extends Model
{
    use SoftDeletes;

   // public $table = 'guestbooks';
    protected $fillable = [
        'nama_transfer', 'email_transfer', 'tgl_transfer', 'bank_customer', 'no_rek_customer', 'total_bayar'
    ];

    protected $hidden = [

    ];
}
