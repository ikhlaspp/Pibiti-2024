<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;

class AbsenceCodeController extends Controller
{
    public function index()
    {
        $tokens = Token::all();
        return view('admin.absences-code.index', compact('tokens'));
    }

    public function activate($id)
    {
        Token::where('id', $id)->update(['status' => true]);
        return redirect()->back();
    }

    public function deactivate($id)
    {
        Token::where('id', $id)->update(['status' => false]);
        return redirect()->back();
    }
}
