<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramIb extends Model
{
    protected $table = 'program_ib';

    protected $fillable = [
        'judul',
        'gambar',
        'ringkasan',
        'isi_konten',
        'gambar_opsional',
    ];
}
