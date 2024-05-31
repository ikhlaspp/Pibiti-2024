<?php

namespace App\Http\Controllers;

use App\Models\PostTest;
use Illuminate\Http\Request;

class PostTestController extends Controller
{
    public function index()
    {
        $post = PostTest::all();
        return view('admin.tests.index')->with("post", $post);
    }

    public function store(Request $request)
    {

        $data = [
            'urlpost' => $request->urlpost,
            'hari' => $request->hari,

        ];
        PostTest::create($data);
        return redirect()->route('tests.view')->with('success', 'Post Test berhasil ditambahkan!');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'hari' => 'required',


        ], [
            'hari.required' => 'tanggal Wajib di isi',
        ]);


        $data = [
            'urlpost' => $request->urlpost,
            'hari' => $request->hari
        ];


        PostTest::where("id", $id)->update($data);
        return redirect()->route('tests.view')->with('success', 'Post Test berhasil diUpdate!');
    }

    public function delete(string $id)
    {

        PostTest::where("id", $id)->delete();
        return redirect()->route('tests.view')->with('success', 'Post Test berhasil ditambahkan!');
    }
}
