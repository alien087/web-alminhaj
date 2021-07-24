<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inbox extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'penerima',
        'pengirim',
        'created_at',
        'updated_at'    
    ];
}
