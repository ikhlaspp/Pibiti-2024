<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hari',
    ];

    public function submitAbsen($token,$day)
    {

        // $today = Carbon::now();
        // $dates = ["1" => '2023-09-12', "2" =>'2023-09-13', "3" =>'2023-09-14', "4" =>'2023-09-15'];
        // $now = $today->format('Y-m-d');


        // $hari = 0;
        // foreach ($dates as $index => $date) {
        //     if($now == $date){
        //         $hari = $index;
        //     }
        // }

        $tokens = Token::where('hari', $day)->get();

        if($tokens[0]["token"] == $token && $tokens[0]["status"] == 1){
            Absen::create([
                'user_id' => auth()->user()->id,
                'hari' => $day,
            ]);
            NilaiModel::create([
                'id_users' => auth()->user()->id,
                'nilai' => 20,
                'keterangan' => "Absen hari ".$day,
            ]);

            return [
                'status' => 1
            ];
        }else if($tokens[0]["token"] == $token && $tokens[0]["status"] == 0){
            Absen::create([
                'user_id' => auth()->user()->id,
                'hari' => $day,
            ]);
            NilaiModel::create([
                'id_users' => auth()->user()->id,
                'nilai' => 10,
                'keterangan' => "Absen hari ".$day,
            ]);

            return [
                'status' => 2
            ];
        }else{
            return [
                'status' => 3
            ];
        }
    }

    public function getAbsenUserToday($day)
    {
        $data = $this->where('user_id',auth()->user()->id)
                     ->where('hari', $day)
                     ->first();

        return $data;
    }

    public function getAbsenAll()
{
    $users = UserModel::where('role', 2)
        ->with('absens')
        ->paginate(10);

    // $data = $users->items();
    // dd($data);

    // $dates = ["1" => '2023-10-15', "2" =>'2023-10-16', "3" =>'2023-10-17',"fp" =>'2023-10-18', "4" =>'2023-10-19'];

    // foreach ($users as $key => $value) {
    //     // $data[$key]->absen1 = [];
    //     // $data[$key]->absen1 = DB::select('SELECT * FROM absens WHERE user_id = ' . $value['id'] . ' AND DATE(created_at) = "' . $dates['1'] . '"');
    //     // dd($data[$key]);

    //     $data[$key]->absen1 = DB::select('SELECT * FROM absens WHERE user_id = ' . $value['id'] . ' AND hari = 1');
    //     $data[$key]->absen2 = DB::select('SELECT * FROM absens WHERE user_id = ' . $value['id'] . ' AND hari = 2');
    //     $data[$key]->absen3 = DB::select('SELECT * FROM absens WHERE user_id = ' . $value['id'] . ' AND hari = 3');
    //     $data[$key]->absen4 = DB::select('SELECT * FROM absens WHERE user_id = ' . $value['id'] . ' AND hari = 4');
    // }

    return $users;
}

    public function getTokenToday(){
        
    }
}
