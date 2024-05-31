<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTestUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'postTest_id',
        'hari',
        'foto',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function post_tests()
    {
        return $this->belongsTo(PostTest::class, 'postTest_id', 'id');
    }
}
