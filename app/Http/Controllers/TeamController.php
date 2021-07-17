<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

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
        $team->image = 'http://localhost:8000/img/team/team-1.jpg';
        $team->save();

        return redirect()->back()->with('success');
    }
}
