<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\User;

class BendaharaController extends Controller
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
        return view('admin.ListUserBendahara', [
            'users' => $users,
            // 'totalNilai' => $totalNilai,
            'user' => $paginatedUsers,
        ]);
    }

    public function verification($id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            User::where("id", $id)->update([
                'role' => 2
            ]);
            return redirect()->route('bendahara.view');
        }
    }

    public function unverification($id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            User::where("id", $id)->update([
                'role' => 0
            ]);
            return redirect()->route('bendahara.view');
        }
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
