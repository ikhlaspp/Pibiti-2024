<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'urltugas',
        'hari'

    ];

    public function users() {
        return $this->belongsToMany(User::class ,'tugas_users','tugas_id', 'users_id')->withPivot('url','status','id','nilai','users_id');
    }
}
