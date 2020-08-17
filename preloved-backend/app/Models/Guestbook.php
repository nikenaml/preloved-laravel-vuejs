<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guestbook extends Model
{
    use SoftDeletes;

   // public $table = 'guestbooks';
    protected $fillable = [
        'nama_tamu', 'email_tamu', 'asal_tamu', 'nohp_tamu', 'komentar_tamu', 'nilai_tamu'
    ];

    protected $hidden = [

    ];

}
