<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TugasAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TugasAdminController extends Controller
{
    public function index()
    {
        $tugas = TugasAdmin::all();
        foreach ($tugas as $item) {
            $item->urltugas = 'http://localhost:8000/storage/' . $item->urltugas;
        }
        return view("admin.ListTugas")->with("tugas", $tugas);
    }

    public function create()
    {
        return view('admin.BuatTugas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',


        ], [
            'hari.required' => 'tanggal Wajib di isi',

        ]);

        $pdf = $request->file('urltugas')->store('pdf/tugas');
        // $pdfName = $pdf->hashName();

        // Storage::disk('public')->putFileAs('pdf/tugas', $pdf, $pdfName);

        $data = [
            'urltugas' => $pdf,
            'judul' => $request->judul,
            'hari' => $request->hari

        ];

        TugasAdmin::create($data);
        return redirect()->route('tasks.view')->with('success', 'Materi berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function delete(string $id)
    {
        TugasAdmin::where("id", $id)->delete();
        return redirect()->route("tasks.view")->with("success", "TUGAS TELAH BERHASIL DI HAPUS");
    }
}
