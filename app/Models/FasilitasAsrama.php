<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FasilitasAsrama extends Model
{
    protected $table = 'fasilitas_asrama';

    protected $fillable = [
        'nama',
        'gambar',
    ];
}
