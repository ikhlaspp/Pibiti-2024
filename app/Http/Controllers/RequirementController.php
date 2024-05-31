<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index()
    {
        $data = Requirement::query()->first();

        if(!$data){
            $data['content'] = '';
        }

        return view('admin.fp-requirements.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        $requirements = Requirement::all();

        foreach($requirements as $requirement){
            Requirement::destroy($requirement['id']);
        }

        Requirement::create($data);

        return redirect()->back();
    }
}
