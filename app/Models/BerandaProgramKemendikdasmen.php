<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BerandaProgramKemendikdasmen extends Model
{
    protected $table = 'beranda_program_kemendikdasmen';

    protected $fillable = [
        'judul',
        'ringkasan',
        'foto',
    ];
}
