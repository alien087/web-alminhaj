<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'isi',
        'author',
        'gambar1',
        'gambar2',
        'gambar3',
        'gambar4',
        'gambar5',
        'created_at',
        'updated_at'       
    ];
}
