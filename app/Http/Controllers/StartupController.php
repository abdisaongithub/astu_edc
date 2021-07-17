<?php

namespace App\Http\Controllers;

use App\Http\Requests\StartupRequest;
use App\Models\Startup;

class StartupController extends Controller
{
    public function create()
    {
        return view('dashboard.startup.create');
    }

    public function store(StartupRequest $request)
    {
        $validated = $request->validated();

        unset($validated->phone);

        $startup = new Startup($validated);

        $startup->save();

        return redirect()->back()->with('success');
    }
}

// TODO: change all redirects to dashboard with flash messages
