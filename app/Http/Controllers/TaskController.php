<?php

namespace App\Http\Controllers;

use App\Models\TugasUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NilaiModel;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;

class TaskController extends Controller
{


    public function index(Request $request)
    {
        $data = TugasUser::leftJoin('users', 'tugas_users.users_id', '=', 'users.id')
            ->leftJoin('tugas_admins', 'tugas_users.tugas_id', '=', 'tugas_admins.id')
            ->when($request->has('status'), function ($query) use ($request) {
                $query->where('tugas_users.status', 'like', '%' . $request->status . '%');
            })
            ->where('role', 2)
            ->select('tugas_users.*', 'tugas_users.id AS id_tugas_users', 'users.*', 'tugas_admins.*')
            ->paginate(10);

        return view("admin.PengumpulanTugas")->with("data", $data);
    }



    public function VerifTugas($id,)
    {
        $tugas = TugasUser::where('id', $id)->first();

        if ($tugas && $tugas->status != 1) {

            TugasUser::where('id', $id)->update([
                'status' => 1
            ]);

            // TugasUser::where('id', $id)->update([
            //     'nilai' => $tugas->nilai + 30
            // ]);

            NilaiModel::create([
                'id_users' => $tugas->users_id,
                'nilai' => 40,
                'keterangan' => 'Verifikasi tugas hari ' . $tugas['hari'],
            ]);


            return redirect()->route('assignment.collection.view')->with('success', 'Tugas Telah sukses di verifikasi');
        } else {
            return redirect()->route('assignment.collection.view')->with('error', 'Tugas ini Telah di verifikasi, tidak dapat memverifikasi tugas yang telah di verifikasi');
        }
    }


    public function UnVerifTugas($id)
    {
        $tugas = TugasUser::where('id', $id)->first();

        if ($tugas  && $tugas->status != 0) {

            TugasUser::where('id', $id)->update([
                'status' => 0
            ]);

            NilaiModel::create([
                'id_users' => $tugas->users_id,
                'nilai' => -40,
                'keterangan' => 'Unverifikasi tugas hari ' . $tugas['hari'],
            ]);


            return redirect()->route('assignment.collection.view')->with('success', 'Tugas Telah sukses di batalkan verifikasinya');
        } else {
            return redirect()->route('assignment.collection.view')->with('error', 'Tugas belum di verifikasi,tidak dapat membatalkan tugas yang belum di verifikasi');
        }
    }

    public function VerifTugasFp(Request $request, $id)
    {
        $tugas = TugasUser::where('id', $id)->first();

        if ($tugas && $tugas->status != 1) {

            TugasUser::where('id', $id)->update([
                'status' => 1
            ]);


            // TugasUser::where('id', $id)->update([
            //     'nilai' => $tugas->nilai + $request->nilai
            // ]);

            NilaiModel::create([
                'id_users' => $tugas->users_id,
                'nilai' => $request->nilai,
                'keterangan' => 'Menilai Final Project',
            ]);


            return redirect()->route('assignment.collection.view')->with('success', 'Tugas Telah sukses di verifikasi');
        } else {
            return redirect()->route('assignment.collection.view')->with('error', 'Tugas ini Telah di verifikasi,tidak dapat memverifikasi tugas yang telah di verifikasi');
        }
    }

    public function ButuhPerbaikan($id)
    {
        $tugas = TugasUser::where('id', $id)->first();

        if ($tugas  && $tugas->status != 0) {

            TugasUser::where('id', $id)->update([
                'status' => 2
            ]);


            TugasUser::where('id', $id)->update([
                'nilai' => 0
            ]);


            return redirect()->route('assignment.collection.view')->with('success', 'Tugas Telah sukses di batalkan verifikasinya');
        } else {
            return redirect()->route('assignment.collection.view')->with('error', 'Tugas belum di verifikasi,tidak dapat membatalkan tugas yang belum di verifikasi');
        }
    }


    public function TambahNilai(Request $request, $id)
    {
        NilaiModel::create([
            'id_users' => $id,
            'nilai' => $request->nilai,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('users.view')->with('success', 'nilai Telah sukses di masukan');
    }
}
