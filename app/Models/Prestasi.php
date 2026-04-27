<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Prestasi extends Model
{
    use HasTranslations;

    protected $table = 'prestasi';

    protected $fillable = [
        'judul',
        'nama_lomba',
        'tingkatan',
        'isi',
        'gambar',
        'tanggal',
        'kategori',
    ];

    public $translatable = ['judul', 'nama_lomba', 'tingkatan', 'isi'];

    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
        ];
    }
}
