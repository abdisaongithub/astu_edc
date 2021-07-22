<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function create()
    {
        return view('dashboard.team.create');
    }

    public function store(TeamRequest $request)
    {
        $validated = $request->validated();

        $team = new Team($validated);

        $team->image = Storage::disk('local')->put('public/', $request->file('image'));

        $team->save();

        return redirect(route('dashboard_index'))->with('success', 'Team Added Successfully');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('dashboard.team.edit', ['team' => $team]);
    }

    public function update(TeamRequest $request, $id)
    {
        $validated = $request->validated();
        $team = Team::findOrFail($id);

        $team->name = $validated['name'];
        $team->position = $validated['position'];

        $team->save();

        return redirect(route('dashboard_index'))->with('success', 'Team Updated Successfully');
    }
}
