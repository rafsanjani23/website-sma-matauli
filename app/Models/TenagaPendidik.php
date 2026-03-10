<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenagaPendidik extends Model
{
    protected $table = 'tenaga_pendidik';

    protected $fillable = [
        'nama',
        'mata_pelajaran',
        'foto',
        'kategori',
    ];
}
