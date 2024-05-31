<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\NilaiModel;
use App\Helpers\GlobalFunc;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{

    public function index(Request $request,)
    {

        $users = User::whereIn('role', [0, 2])
            ->with(['nilai' => function ($query) {
                $query->orderBy('nilai', 'desc');
            }])
            ->when($request->search, function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            })
            ->get();




        $users->each(function ($user) {
            $user->total_nilai_tugas = $user->nilai->sum('nilai');
        });


        $perPage = 10;
        $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage();
        $currentPageItems = $users->slice(($currentPage - 1) * $perPage, $perPage)->all();

        // Create LengthAwarePaginator instance
        $paginatedUsers = new \Illuminate\Pagination\LengthAwarePaginator($currentPageItems, count($users), $perPage);
        $paginatedUsers->setPath($request->url());

        // dd($users);
        // return $ar = array_sum([2, 4]);
        // return $users[2]['nilai'][0];
        return view('admin.ListUser', [
            'users' => $users,
            // 'totalNilai' => $totalNilai,
            'user' => $paginatedUsers,
        ]);
    }

    // public function index(Request $request)
    // {
    //     $users = User::where('role', '!=', 1)
    //         ->with(['nilai' => function ($query) {
    //             $query->orderBy('nilai', 'desc');
    //         }])
    //         ->when($request->search, function ($query) use ($request) {
    //             $query->where('name', 'like', '%' . $request->search . '%')
    //                 ->orWhere('email', 'like', '%' . $request->search . '%');
    //         })
    //         ->get();

    //     // Calculate total score for each user
    //     $users->each(function ($user) {
    //         $user->total_nilai_tugas = $user->nilai->sum('nilai');
    //     });

    //     // Sort users by total score in descending order
    //     $sortedUsers = $users->sortByDesc('total_nilai_tugas');

    //     // Paginate the sorted users
    //     $perPage = 10;
    //     $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage();
    //     $currentPageItems = $sortedUsers->slice(($currentPage - 1) * $perPage, $perPage)->all();

    //     // Create LengthAwarePaginator instance
    //     $paginatedUsers = new \Illuminate\Pagination\LengthAwarePaginator($currentPageItems, count($sortedUsers), $perPage);
    //     $paginatedUsers->setPath($request->url());

    //     return view("admin.ListUser")->with("user", $paginatedUsers);
    // }


    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import(Request $request)
    {
        // return Excel::download(new UsersExport, 'users.xlsx');
        $excel = $request->file('excel');
        // dd($excel);

        // $path = (string) $excel->path();
        $path = (string) $excel->store();
        // dd($path);
        // $filePath = storage_path('app/excel/' . $path);

        // Import excel excel ke array
        // $data = Excel::import($path, function($reader) {
        //     return $reader->get();
        // });
        $data = Excel::toArray(new UsersImport, $path);

        // dd($data);

        foreach ($data[0] as $key => $value) {
            if ($key == 0) {
                continue;
            }

            DB::table('users')->insert([
                'name' => $value[2],
                'password' => bcrypt('pibiti2023'),
                'nomor_telepon' => $value[5],
                'email' => $value[3],
                'sekolah' => $value[4],
                'urlbukti' => $value[7],
                'kelompok' => $value[11],
                'role' => '2',
            ]);
            // dd($value);
        }

        return redirect()->route('users.view');
        // return $data;


        // Tampilkan data dalam array
        // return view('excel', compact('data'));
    }

    public function verification($id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            User::where("id", $id)->update([
                'role' => 2
            ]);
            return redirect()->route('users.view');
        }
    }

    public function unverification($id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            User::where("id", $id)->update([
                'role' => 0
            ]);
            return redirect()->route('users.view');
        }
    }

    public function resetPassword($id)
    {
        $user = User::where('id', $id)->first();

        $min = 10000;
        $max = 99999;
        $rand = rand($min, $max);

        $newPassword = "pass" . $rand;

        $hash = Hash::make($newPassword);

        if ($user) {
            User::where("id", $id)->update([
                'password' => $hash
            ]);
            // return redirect()->route('users.ResetPassword');

            return view('admin.ResetPassword', [
                'user' => $user,
                'newPassword' => $newPassword,
            ]);
        }
    }

    public function Kelompok($id, Request $request)
    {
        // $data = $request->validate([
        //     'kelompok' => 'required'
        // ]);

        $user = User::where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan!');
        }

        User::where('id', $id)->update([
            'kelompok' => $request->kelompok
        ]);

        return redirect()->route('users.view');
    }
}
