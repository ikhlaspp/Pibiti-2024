<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'urlvideo',
        'hari',
        'judul'
    ];
}
