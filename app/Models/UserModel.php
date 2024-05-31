<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function absens()
    {
        return $this->hasMany(Absen::class,'user_id', 'id');
    }
}