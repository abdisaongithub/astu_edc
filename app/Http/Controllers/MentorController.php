<?php

namespace App\Http\Controllers;

use App\Http\Requests\MentorRequest;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::paginate(20);
        return view('dashboard.mentor.index', ['mentors' => $mentors]);
    }

    public function create()
    {
        return view('dashboard.mentor.create');
    }

    public function store(MentorRequest $request)
    {
        $validated = $request->validated();

        $mentor = new Mentor($validated);

        $path = Storage::disk('local')->put('public/', $request->file('image'));

        $mentor->image = $path;

        $mentor->save();

        return redirect(route('mentor_index'))->with('success', 'Mentor Added Successfully');
    }

    public function edit($id)
    {
        $mentor = Mentor::findOrFail($id);
        return view('dashboard.mentor.edit', ['mentor' => $mentor]);
    }

    public function update(MentorRequest $request, $id)
    {
        $validated = $request->validated();
        $mentor = Mentor::findOrFail($id);

        $mentor->name = $validated['name'];
        $mentor->title = $validated['title'];
        $mentor->occupation = $validated['occupation'];
        $mentor->rank = $validated['rank'];

        if (isset($request->image)){
            Storage::delete($mentor->image);
            $mentor->image = Storage::disk('local')->put('public/', $request->file('image'));
        }

        $mentor->save();

        return redirect(route('mentor_index'))->with('success', 'Successfully Updated Mentor');
    }

    public function destroy($id)
    {
        $mentor = Mentor::findOrFail($id);
        Storage::delete($mentor->image);
        $mentor->delete();
        return redirect(route('mentor_index'))->with('success', 'Successfully Deleted Mentor');
    }
}
