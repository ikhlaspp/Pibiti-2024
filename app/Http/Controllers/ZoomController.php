<?php

namespace App\Http\Controllers;

use App\Models\Zoom;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    public function index()
    {
        $post = Zoom::all();
        return view('admin.zooms.index')->with("post", $post);
    }

    public function store(Request $request)
    {

        $data = [
            'link_zoom' => $request->linkzoom,
            'hari' => $request->hari,
        ];

        Zoom::create($data);
        return redirect()->route('zooms.view')->with('success', 'link zoom berhasil ditambahkan!');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'hari' => 'required',


        ], [
            'hari.required' => 'tanggal Wajib di isi',

        ]);


        $data = [
            'link_zoom' => $request->linkzoom,
            'hari' => $request->hari
        ];


        Zoom::where("id", $id)->update($data);
        return redirect()->route('zooms.view')->with('success', 'link zoom berhasil diUpdate!');
    }

    public function delete(string $id)
    {

        Zoom::where("id", $id)->delete();
        return redirect()->route('zooms.view')->with('success', 'link zoom berhasil dihapus!');
    }
}
