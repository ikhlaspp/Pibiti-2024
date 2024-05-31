<?php

namespace App\Http\Controllers;

use App\Models\TugasUser;
use App\Models\NilaiModel;
use App\Models\PostTest;
use App\Models\PostTestUser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class TestUserController extends Controller
{
    public function index(Request $request)
    {
        // $data = PostTestUser::leftJoin('users', 'post_test_users.user_id', '=', 'users.id')
        //     ->leftJoin('post_tests', 'post_test_users.postTest_id', '=', 'post_tests.id')
        //     ->where('role', 2)
        //     ->select('post_test_users.*', 'post_test_users.id AS id_post_test_users', 'users.*', 'post_tests.*')
        //     ->paginate(10);

        $data = PostTestUser::query()
            ->with(['users', 'post_tests'])
            ->when($request->has('status'), function ($query) use ($request) {
                return $query->where('status', 'like', '%' . $request->status . '%');
            })
            ->get();



        if ($data) {
            foreach ($data as $test) {
                $test['foto'] = 'http://localhost:8000/storage/' . $test['foto'];
            }
        }

        return view('admin.test-collections.index')->with("data", $data);
    }

    public function VerifPostTest(Request $request, $id)
    {
        $tugas = PostTestUser::where('id', $id)->first();

        if (!$tugas) {
            return redirect()->back()->with('error', 'Post test tidak ditemukan!');
        }

        $global = \GlobalFunc::instance();
        $dates = $global->dates;

        $postTestAdmin = PostTest::where('id', $tugas->postTest_id)->first();

        $day = "undefined";
        foreach ($dates as $key => $val) {
            if ($val == $postTestAdmin->hari) {
                $day = $key;
            }
        }

        PostTestUser::where('id', $id)->update([
            'status' => 1
        ]);

        NilaiModel::create([
            'id_users' => $tugas['user_id'],
            'nilai' => $request->nilai,
            'keterangan' => 'Verifikasi Post test hari ' . $day,
        ]);

        return redirect()->route('test-collections.view')->with('success', 'Post test telah di verifikasi');
    }

    public function UnverifPostTest($id)
    {
        $tugas = PostTestUser::where('id', $id)->first();

        if (!$tugas) {
            return redirect()->back()->with('error', 'Post test tidak ditemukan!');
        }

        $global = \GlobalFunc::instance();
        $dates = $global->dates;

        $postTestAdmin = PostTest::where('id', $tugas->postTest_id)->first();

        $day = "undefined";
        foreach ($dates as $key => $val) {
            if ($val == $postTestAdmin->hari) {
                $day = $key;
            }
        }

        PostTestUser::where('id', $id)->update([
            'status' => 2
        ]);


        NilaiModel::create([
            'id_users' => $tugas->user_id,
            'nilai' => -20,
            'keterangan' => 'Unverifikasi Post test hari ' . $day,
        ]);

        return redirect()->route('test-collections.view')->with('success', 'Post test telah di unverifikasi');
    }

    public function TolakPostTest($id)
    {
        $tugas = PostTestUser::where('id', $id)->first();

        if (!$tugas) {
            return redirect()->back()->with('error', 'Post test tidak ditemukan!');
        }

        PostTestUser::where('id', $id)->update([
            'status' => 2
        ]);

        // NilaiModel::create([
        //     'id_users' => $tugas->user_id,
        //     'nilai' => 0,
        //     'keterangan' => 'nilai',
        // ]);

        return redirect()->route('test-collections.view')->with('success', 'Post test telah ditolak!');
    }
}
