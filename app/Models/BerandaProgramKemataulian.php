<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BerandaProgramKemataulian extends Model
{
    protected $table = 'beranda_program_kemataulian';

    protected $fillable = [
        'judul',
        'ringkasan',
        'foto',
    ];
}
