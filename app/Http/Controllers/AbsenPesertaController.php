<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Materi;
use App\Models\NilaiModel;
use App\Models\Requirement;
use App\Models\PostTest;
use App\Models\PostTestUser;
use App\Models\Sertifikat;
use App\Models\Tugas;
use App\Models\TugasAdmin;
use App\Models\TugasUser;
use App\Models\VideoRecord;
use App\Models\Zoom;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AbsenPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $global = \GlobalFunc::instance();
        $dates = $global->dates;
        $today = Carbon::now();
        // $dates = ["welcome" => "2023-09-03",  "1" => '2023-09-04', "2" =>'2023-09-11', "3" =>'2023-09-18', "4" =>'2023-12-02'];
        $now = $today->format('Y-m-d');


        $hari = 0;
        foreach ($dates as $index => $date) {
            if ($now == $date) {
                if ($index == "welcome") {
                    return redirect('welcome');
                } else {
                    $hari = $index;
                }
            }
        }

        return redirect('peserta/day/' . $hari);

        // $global = \GlobalFunc::instance();

        // $menu = $global->getMenu(2);

        // $model = new Absen();

        // $absen_today = $model->getAbsenUserToday();

        // $tugasHariIni = Tugases::where('hari', date('Y-m-d'))->first();

        // return view('absen-peserta.index', [
        //     'menu' => $menu,
        //     'absen_today' => $absen_today
        // ]);
    }

    public function welcome()
    {
        $global = \GlobalFunc::instance();
        $global;
        $nilai = NilaiModel::with('User')->where('id_users', auth()->user()->id)->get();
        $totalNilai = 0;

        if ($nilai) {
            $totalNilai = $nilai->sum('nilai');
        }

        return view('absen-peserta.welcome', [
            'nilai' => $nilai,
            'totalNilai' => $totalNilai
        ]);
    }

    public function day($day)
    {
        $global = \GlobalFunc::instance();

        $menu = $global->getMenu(2);

        $today = Carbon::now();
        // $dates = ["1" => '2023-11-04', "2" =>'2023-11-11', "3" =>'2023-11-18', "4" =>'2023-12-02']; 
        // $dates = ["1" => '2023-11-04', "2" =>'2023-11-11', "3" =>'2023-11-18',"fp" =>'2023-11-18', "4" =>'2023-12-02'];
        // $dates = ["1" => '2023-10-15', "2" =>'2023-10-16', "3" =>'2023-10-17',"fp" =>'2023-10-18', "4" =>'2023-10-19'];
        $dates = $global->dates;
        $now = $today->format('Y-m-d');

        $tugas = TugasAdmin::where('hari', $dates[$day])->first();
        $materi = Materi::where('hari', $dates[$day])->first();
        $postTest = PostTest::where('hari', $dates[$day])->first();
        $videoRecord = VideoRecord::where('hari', $dates[$day])->first();
        $sertificate = Sertifikat::query()->first();
        $zoom = Zoom::where('hari', $dates[$day])->first();
        $nilai = NilaiModel::with('User')->where('id_users', auth()->user()->id)->get();
        $totalNilai = 0;

        if ($nilai) {
            $totalNilai = $nilai->sum('nilai');
        }


        if (!$sertificate) {
            $sertificate['sertifikat'] = '';
        }


        if ($day > 6 || $now < $dates[$day]) {
            return redirect()->route('welcome');
        }

        $model = new Absen();

        $absen_today = $model->getAbsenUserToday($day);

        $tugasHariIni = TugasUser::where('users_id', Auth::user()->id)->where('hari', $day)->first();

        $statusTugas = "Belum Mengumpulkan";
        if ($tugasHariIni) {
            if ($tugasHariIni['status'] == 0) {
                $statusTugas = "Belum di Verifikasi";
            } else if ($tugasHariIni['status'] == 1) {
                $statusTugas = "Sudah di Verifikasi";
            } else if ($tugasHariIni['status'] == 2) {
                $statusTugas = "Perlu Perbaikan";
            }
        }

        $postTestHariIni = PostTestUser::where('user_id', Auth::user()->id)->where('hari', $dates[$day])->first();
        $statusPostTest = "Belum Mengumpulkan";
        if ($postTestHariIni) {
            if ($postTestHariIni['status'] == 0) {
                $statusPostTest = "Belum di Verifikasi";
            } else if ($postTestHariIni['status'] == 1) {
                $statusPostTest = "Sudah di Verifikasi";
            } else {
                $statusPostTest = "Ditolak";
            }
        }

        if ($tugas) {
            $tugas->urltugas = 'http://localhost:8000/storage/' . $tugas->urltugas;
        }
        // return $tugas->urltugas;

        return view('absen-peserta.index', [
            'menu' => $menu,
            'absen_today' => $absen_today,
            'tugasHariIni' => $tugasHariIni,
            'statusTugas' => $statusTugas,
            'postTestHariIni' => $postTestHariIni,
            'statusPostTest' => $statusPostTest,
            'day' => $day,
            'materi' => $materi,
            'tugas' => $tugas,
            'videoRecord' => $videoRecord,
            'postTest' => $postTest,
            'sertificate' => $sertificate,
            'zoom' => $zoom,
            'nilai' => $nilai,
            'totalNilai' => $totalNilai,
        ]);
    }

    public function finalDay()
    {
        $global = \GlobalFunc::instance();
        $dates = $global->dates;

        $today = Carbon::now();
        // $dates = ["1" => '2023-11-04', "2" =>'2023-11-11', "3" =>'2023-11-18', "4" =>'2023-12-02']; 
        // $dates = ["1" => '2023-11-04', "2" =>'2023-11-11', "3" =>'2023-11-18',"fp" =>'2023-11-18', "4" =>'2023-12-02'];
        // $dates = ["1" => '2023-10-15', "2" =>'2023-10-16', "3" =>'2023-10-17',"fp" =>'2023-10-17', "4" =>'2023-10-19'];
        $now = $today->format('Y-m-d');

        $nilai = NilaiModel::with('User')->where('id_users', auth()->user()->id)->get();
        $totalNilai = 0;

        if ($nilai) {
            $totalNilai = $nilai->sum('nilai');
        }

        // $tugas = TugasAdmin::where('hari', $dates["fp"])->first();
        // $materi = Materi::where('hari', $dates["fp"])->first();

        if ($now < $dates["4"]) {
            return redirect()->route('welcome');
        }

        $sertificate = Sertifikat::query()->first();
        $zoom = Zoom::where('hari', $dates["4"])->first();

        if (!$sertificate) {
            $sertificate['sertifikat'] = '';
        }

        return view('final-day.index', [
            'sertificate' => $sertificate,
            'zoom' => $zoom,
            'nilai' => $nilai,
            'totalNilai' => $totalNilai,
        ]);
    }

    public function finalProject()
    {

        $requirement = Requirement::query()->first();
        $global = \GlobalFunc::instance();
        $dates = $global->dates;

        $today = Carbon::now();
        // $dates = ["1" => '2023-11-04', "2" =>'2023-11-11', "3" =>'2023-11-18', "4" =>'2023-12-02']; 
        // $dates = ["1" => '2023-11-04', "2" =>'2023-11-11', "3" =>'2023-11-18',"fp" =>'2023-11-18', "4" =>'2023-12-02'];
        // $dates = ["1" => '2023-10-15', "2" =>'2023-10-16', "3" =>'2023-10-17',"fp" =>'2023-10-17', "4" =>'2023-10-19'];
        $now = $today->format('Y-m-d');

        $nilai = NilaiModel::with('User')->where('id_users', auth()->user()->id)->get();
        $totalNilai = 0;

        if ($nilai) {
            $totalNilai = $nilai->sum('nilai');
        }

        // $tugas = TugasAdmin::where('hari', $dates["fp"])->first();
        // $materi = Materi::where('hari', $dates["fp"])->first();

        if ($now < $dates["fp"]) {
            return redirect()->route('welcome');
        }

        $tugasHariIni = TugasUser::where('users_id', Auth::user()->id)->where('hari', 3)->first();

        $statusTugas = "Belum Mengumpulkan";
        if ($tugasHariIni) {
            if ($tugasHariIni['status'] == 0) {
                $statusTugas = "Belum di Verifikasi";
            } else if ($tugasHariIni['status'] == 1) {
                $statusTugas = "Sudah di Verifikasi";
            } else if ($tugasHariIni['status'] == 2) {
                $statusTugas = "Perlu Perbaikan";
            }
        }

        if (!$requirement) {
            $requirement['content'] = '';
        }

        return view('final-project.index', [
            // 'menu' => $menu,
            // 'absen_today' => $absen_today,
            'tugasHariIni' => $tugasHariIni,
            'statusTugas' => $statusTugas,
            'requirement' => $requirement,
            'nilai' => $nilai,
            'totalNilai' => $totalNilai,
            // 'day' => $day,
            // 'materi' => $materi,
            // 'tugas' => $tugas
        ]);
    }

    public function submitAbsen(Request $request, $day)
    {
        $model = new Absen();
        $token = $request->token;
        $response = $model->submitAbsen($token, $day);

        if ($response['status'] == 1) {
            return redirect()->to('peserta/day/' . $day)->with('success', 'Absen berhasil!');
        } else if ($response['status'] == 2) {
            return redirect()->to('peserta/day/' . $day)->with('success', 'Absen berhasil, tetapi terlambat!');
        } else {
            return redirect()->to('peserta/day/' . $day)->with('warning', 'Absen gagal!');
        }
    }

    public function submitTugas(Request $request, $day)
    {
        $model = new Absen();

        $global = \GlobalFunc::instance();
        $dates = $global->dates;

        // var_dump($day);die;

        $tugas = $request->input('tugas');

        $day_temp = $day;

        if ($day == "fp") {
            $day_temp = 3;
        }

        // $dates = ["1" => '2023-11-04', "2" =>'2023-11-11', "3" =>'2023-11-18',"fp" =>'2023-11-18', "4" =>'2023-12-02'];
        // $dates = ["1" => '2023-10-15', "2" =>'2023-10-16', "3" =>'2023-10-17',"fp" =>'2023-10-18', "4" =>'2023-10-19'];

        $tugasHariIni = TugasUser::where('hari', $day_temp)->where('users_id', auth()->user()->id)->first();

        $tugasAdminHariIni = TugasAdmin::where('hari', $dates[$day_temp])->first();

        if ($tugasHariIni) {
            $tugasHariIni->delete();
        }

        // Simpan tugas baru ke dalam database
        TugasUser::create([
            'users_id' => auth()->user()->id,
            'tugas_id' => $tugasAdminHariIni['id'],
            'hari' => $day_temp,
            'url' => $tugas,
            'status' => 0,
            'niali' => 0,
        ]);

        if ($day != "fp") {
            // $day_temp=3;
            return redirect('peserta/day/' . $day)->with('success-tugas', 'Tugas berhasil disimpan.');
        } else {
            return redirect('peserta/final-project')->with('success-tugas', 'Tugas berhasil disimpan.');
        }


        // $response = $model->submit();

        // if($response['status'] == 1){
        //     return redirect('peserta')->with('success', 'Absen berhasil!');;
        // }else{
        //     return redirect('peserta')->with('warning', 'Absen gagal!');;
        // }
    }

    public function submitPosttest(Request $request, $day)
    {
        $model = new Absen();

        $global = \GlobalFunc::instance();
        $dates = $global->dates;


        $request->validate([
            'posttest' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('posttest')->store('images/postest');
        // $imageName = $image->hashName();

        // Storage::disk('public')->putFileAs('images/postest', $image, $imageName);



        $postTest = PostTest::where('hari', $dates[$day])->first();

        $day_temp = $day;

        if ($day == "fp") {
            $day_temp = 3;
        }

        $postTestUserHariIni = PostTestUser::where('hari', $dates[$day_temp])->where('user_id', auth()->user()->id)->first();

        if ($postTestUserHariIni) {
            $postTestUserHariIni->delete();
        }


        PostTestUser::create([
            'user_id' => auth()->user()->id,
            'postTest_id' => $postTest['id'],
            'hari' => $dates[$day],
            'foto' => $image,
            'status' => 0,
        ]);

        // if($day != "fp"){
        // $day_temp=3;
        return redirect('peserta/day/' . $day)->with('success-tugas', 'Post test berhasil disimpan.');
        // }else{
        // return redirect('peserta/final-project')->with('success-tugas', 'Tugas berhasil disimpan.');
        // }


        // $response = $model->submit();

        // if($response['status'] == 1){
        //     return redirect('peserta')->with('success', 'Absen berhasil!');;
        // }else{
        //     return redirect('peserta')->with('warning', 'Absen gagal!');;
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Absence $Absence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absence $Absence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absence $Absence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absence $Absence)
    {
        //
    }
}
