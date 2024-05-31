<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\StateEvent;
use App\Models\Token;
use App\Models\TugasAdmin;
use App\Models\TugasUser;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function users(Request $request)
    {
        $user = User::where('role', '!=', 1);

        if ($request->search) {
            $user->where('name', 'like', '%' . $request->search . '%');
        }

        $user = $user->get();

        return view("admin.ListUser")->with("user", $user);
    }

    public function ExportUser()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function dashboard()
    {
        $user = User::where('role', '=', 2)->get()->take(5);
        $material = Materi::all()->take(5);
        $tasks = TugasAdmin::all()->take(5);
        $taskCount = TugasAdmin::all()->count();
        $userCount = $user->count();
        $pesertaCount = User::where('role', 2)->get();
        $materialCount = $material->count();
        $eventState = StateEvent::first(['status'])->status;
        return view('admin.index', [
            'users' => $user,
            'materials' => $material,
            'tasks' => $tasks,
            'taskCount' => $taskCount,
            'userCount' => $userCount,
            'pesertaCount' => $pesertaCount->count(),
            'materialCount' => $materialCount,
            'eventState' => $eventState,
        ]);
    }

    public function BelumVerifikasi()
    {
        $user = User::where('role', 0)->get();
        return view("admin.BelumVerifikasi")->with("user", $user);
    }

    public function SudahVerifikasi()
    {
        User::where('role', 2)->get();
        // return view("admin.SudahVerifikasi")->with("user", $user);
        return redirect()->route('ListUser');
    }

    public function VerifikasiUser($id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            User::where("id", $id)->update([
                'role' => 2
            ]);
            // return redirect("ListUser/BelumVerifikasi")->with("success", "user telah di verifikasi");
            return redirect()->route('ListUser');
        }
    }

    public function UnVerifikasiUser($id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            User::where("id", $id)->update([
                'role' => 0
            ]);
            // return redirect("ListUser/BelumVerifikasi")->with("success", "user telah di verifikasi");
            return redirect()->route('ListUser');
        }
    }

    public function token()
    {
        $today = Carbon::today();

        // $dates = ["1" => '2023-11-04', "2" =>'2023-11-11', "3" =>'2023-11-18', "4" =>'2023-12-02'];
        $dates = ["1" => '2023-10-08', "2" => '2023-10-10', "3" => '2023-10-11', "fp" => '2023-10-12', "4" => '2023-11-02'];

        $now = Carbon::now()->format('Y-m-d');


        $hari = 0;
        foreach ($dates as $index => $date) {
            if ($now == $date) {
                $hari = $index;
            }
        }


        $tokens = Token::where('hari', $hari)->get();
        // var_dump($tokens);die;

        // return view('admin.token', compact('tokens'));
        return view('admin.token', [
            'tokens' => $tokens
        ]);
    }

    public function tokenAktivasi($id)
    {
        $token = Token::find($id);

        if ($token) {
            $token->update([
                'expired' => Carbon::now()->addHour(),
            ]);

            // var_dump(Carbon::now()->addHour());die;

            return redirect("token")->with('success', 'Token berhasil diaktifkan.');
            // return redirect()->route('token.index')->with('success', 'Token berhasil diaktifkan.');
        }

        return redirect("token")->with('error', 'Token tidak ditemukan.');
        // return redirect()->route('token.index')->with('error', 'Token tidak ditemukan.');
    }

    public function eventAktivasi()
    {
        $event = TugasAdmin::where('hari', "1945-08-17")->first();

        if ($event) {
            TugasAdmin::where('hari', "1945-08-17")->update([
                'urltugas' => "opened"
            ]);
            // return redirect("ListUser/BelumVerifikasi")->with("success", "user telah di verifikasi");
            return redirect()->back();
        }
    }
}
