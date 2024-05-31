<?php

namespace App\Http\Controllers;

use App\Models\VideoRecord;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $post = VideoRecord::all();
        return view('admin.records.index')->with("post", $post);
    }

    public function store(Request $request)
    {

        $data = [
            'urlvideo' => $request->urlvideo,
            'hari' => $request->hari,
            'judul' => 'video'
        ];

        VideoRecord::create($data);
        return redirect()->route('records.view')->with('success', 'Post Test berhasil ditambahkan!');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'hari' => 'required',


        ], [
            'hari.required' => 'tanggal Wajib di isi',

        ]);


        $data = [
            'urlvideo' => $request->urlvideo,
            'hari' => $request->hari
        ];


        VideoRecord::where("id", $id)->update($data);
        return redirect()->route('records.view')->with('success', 'video berhasil diUpdate!');
    }

    public function delete(string $id)
    {

        VideoRecord::where("id", $id)->delete();
        return redirect()->route('records.view')->with('success', 'video berhasil dihapus!');
    }
}
