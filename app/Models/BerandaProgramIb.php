<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BerandaProgramIb extends Model
{
    protected $table = 'beranda_program_ib';

    protected $fillable = [
        'judul',
        'ringkasan',
        'foto',
    ];
}
