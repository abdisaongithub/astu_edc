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

        return redirect(route('dashboard_index'))->with('success', 'Startup Created Successfully');
    }

    public function edit($id)
    {
        $startup = Startup::find($id);
        return view('dashboard.startup.edit', ['startup' => $startup]);
    }

    public function update(StartupRequest $request, $id)
    {
        $validated = $request->validated();

        $startup = Startup::findOrFail($id);

        $startup->name = $validated['name'];
        $startup->description = $validated['description'];
        $startup->detail = $validated['detail'];
        $startup->category = $validated['category'];

        $startup->slogan = $validated['slogan'];
        $startup->email = $validated['email'];
        $startup->website = $validated['website'];
        $startup->location = $validated['location'];

        $startup->save();

        return redirect(route('dashboard_index'))->with('success', 'Startup Updated Successfully');

    }
}

// TODO: change all redirects to dashboard with flash messages
