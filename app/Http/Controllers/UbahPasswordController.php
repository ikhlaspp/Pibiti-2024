<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UbahPasswordController extends Controller
{
    public function index()
    {
        return view('ubah-password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|string|min:4',
        ]);

        $user = User::find(auth()->user()->id);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'Password lama salah.');
        }

        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->to('/welcome')->with('success', 'Ubah Password berhasil!');
    }
}
