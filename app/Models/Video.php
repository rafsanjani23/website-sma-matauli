<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Video extends Model
{
    use HasTranslations;

    protected $table = 'video';

    protected $fillable = [
        'judul',
        'youtube_id',
        'video_path',
        'thumbnail_path',
    ];

    public $translatable = ['judul'];
}
