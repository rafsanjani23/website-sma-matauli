<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramKemataulian extends Model
{
    protected $table = 'program_kemataulian';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
