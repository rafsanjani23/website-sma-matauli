<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudiLanjut extends Model
{
    protected $table = 'studi_lanjut';

    protected $fillable = [
        'foto',
        'nama_alumni',
        'nama_lembaga',
        'kategori',
    ];
}
