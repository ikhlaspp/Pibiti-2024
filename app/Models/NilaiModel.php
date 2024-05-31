<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class NilaiModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users',
        'nilai',
        'keterangan'
    ];

    protected $table = 'nilais';

    public function User()
    {
        return $this->hasMany(User::class, 'id', 'id_users');
    }
}