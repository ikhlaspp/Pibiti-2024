<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'tugas_id',
        'url',
        'hari',
        'nilai',
        'status'

    ];

    public function user()
{
    return $this->belongsTo(UserModel::class ,'users','users_id', 'users_id');
}

    
    
}
