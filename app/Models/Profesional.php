<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    protected $table = 'profesional';

    protected $fillable = [
        'nama',
        'nama_lembaga',
        'foto',
        'link_facebook',
        'link_twitter',
        'link_linkedin',
    ];
}
