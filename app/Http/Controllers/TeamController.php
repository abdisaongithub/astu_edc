<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(20);
        return view('dashboard.team.index', ['teams' => $teams]);
    }

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

        return redirect(route('team_index'))->with('success', 'Team Added Successfully');
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

        if (isset($request->image)){
            Storage::delete($team->image);
            $team->image = Storage::put('public/', $request->file('image'));
        }

        $team->save();

        return redirect(route('team_index'))->with('success', 'Team Updated Successfully');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        Storage::delete($team->image);
        $team->delete();
        return redirect()->back()->with('success', 'Successfully Deleted Team Member');
    }
}
