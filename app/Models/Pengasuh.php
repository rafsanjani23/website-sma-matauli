<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengasuh extends Model
{
    use HasFactory;
    protected $table = 'pengasuhs';

    protected $fillable = [
        'nama',
        'foto',
    ];
}
