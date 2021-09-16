<?php

namespace App\Http\Controllers;

use App\Http\Requests\StartupRequest;
use App\Models\Image;
use App\Models\Phone;
use App\Models\Startup;
use Illuminate\Support\Facades\Storage;

class StartupController extends Controller
{
    public function index()
    {
        $startups = Startup::paginate(20);
        return view('dashboard.startup.index', ['startups' => $startups]);
    }

    public function create()
    {
        return view('dashboard.startup.create');
    }

    public function store(StartupRequest $request)
    {
        $validated = $request->validated();


        $startup = new Startup($validated);
        $startup->save();

        if ($request->phone){
            $phone = new Phone([
                'startup_id' => $startup->id,
                'phone' => $request->phone
            ]);
            $phone->save();
        }

        if ($request->image_1){
            $path_1 = Storage::disk('local')->put('public/', $request->file('image_1'));
            $image1 = new Image([
                'startup_id' => $startup->id,
                'image' => $path_1
            ]);
            $image1->save();
        }
        if ($request->image_2){
            $path_2 = Storage::disk('local')->put('public/', $request->file('image_2'));
            $image2 = new Image([
                'startup_id' => $startup->id,
                'image' => $path_2
            ]);
            $image2->save();
        }
        if ($request->image_3){
            $path_3 = Storage::disk('local')->put('public/', $request->file('image_3'));
            $image3 = new Image([
                'startup_id' => $startup->id,
                'image' => $path_3
            ]);
            $image3->save();
        }
        if ($request->image_4){
            $path_4 = Storage::disk('local')->put('public/', $request->file('image_4'));
            $image4 = new Image([
                'startup_id' => $startup->id,
                'image' => $path_4
            ]);
            $image4->save();
        }

        return redirect(route('startup_index'))->with('success', 'Startup Created Successfully');
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

        if (isset($request->image_1) || isset($request->image_2) || isset($request->image_3) || isset($request->image_4)){
            $images = Image::where('startup_id', $startup->id)->get();
            foreach ($images as $image){
                $image->delete();
            }
        }


        if (isset($request->image_1)){
            $path_1 = Storage::put('public/', $request->file('image_1'));
            $image1 = new Image([
                'startup_id' => $startup->id,
                'image' => $path_1
            ]);
            $image1->save();
        }
        if (isset($request->image_2)){
            $path_2 = Storage::put('public/', $request->file('image_2'));
            $image2 = new Image([
                'startup_id' => $startup->id,
                'image' => $path_2
            ]);
            $image2->save();
        }
        if (isset($request->image_3)){
            $path_3 = Storage::put('public/', $request->file('image_3'));
            $image3 = new Image([
                'startup_id' => $startup->id,
                'image' => $path_3
            ]);
            $image3->save();
        }
        if (isset($request->image_4)){
            $path_4 = Storage::put('public/', $request->file('image_4'));
            $image4 = new Image([
                'startup_id' => $startup->id,
                'image' => $path_4
            ]);
            $image4->save();
        }


        return redirect(route('startup_index'))->with('success', 'Startup Updated Successfully');

    }

    public function destroy($id)
    {
        $startup = Startup::findOrFail($id);
        $startup->delete();
        return redirect()->back()->with('success', 'Startup Deleted Successfully');
    }
}
