<?php

namespace App\Http\Controllers;

use App\Models\StateEvent;
use Illuminate\Http\Request;

class StateEventController extends Controller
{
    public function activated()
    {
        StateEvent::query()->first()->update(['status' => true]);

        return redirect()->back();
    }

    public function deactivated()
    {
        StateEvent::query()->first()->update(['status' => false]);

        return redirect()->back();
    }
}
