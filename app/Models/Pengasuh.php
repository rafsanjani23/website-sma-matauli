<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengasuh extends Model
{
    protected $table = 'pengasuhs';

    protected $fillable = [
        'nama',
        'foto',
    ];
}
