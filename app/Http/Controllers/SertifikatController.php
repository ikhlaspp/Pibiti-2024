<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()
    {
        $post = Sertifikat::all();
        return view('admin.sertificates.index')->with("post", $post);
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'sertifikat' => 'required'
        ]);

        $sertifikat = Sertifikat::all();

        foreach($sertifikat as $item){
            Sertifikat::destroy($item['id']);
        }

        Sertifikat::create($data);
        return redirect()->route('sertificates.view')->with('success', 'sertifikat berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $sertifikat = Sertifikat::query()->where('id', $id)->first();

        if(!$sertifikat){
            return redirect()->back()->with('error', 'Data tidak ditemukan!');
        }

        Sertifikat::destroy($id);

        return redirect()->back();
    }
}
