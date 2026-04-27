<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Media extends Model
{
    use HasTranslations;

    protected $table = 'media';

    protected $fillable = [
        'judul',
        'ringkasan',
        'isi',
        'gambar',
        'link_facebook',
        'tanggal',
    ];

    public $translatable = ['judul', 'ringkasan', 'isi'];

    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
        ];
    }
}
