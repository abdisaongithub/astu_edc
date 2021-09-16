<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::paginate(20);
        return view('dashboard.testimonial.index', ['testimonials' => $testimonials]);
    }

    public function create()
    {
        return view('dashboard.testimonial.create');
    }

    public function store(TestimonialRequest $request)
    {
        $validated = $request->validated();

        $testimonial = new Testimonial($validated);

        $path = Storage::put('public/', $request->file('image'));

        $testimonial->image = $path;

//        dd($request);

        $testimonial->save();

        return redirect(route('testimonial_index'))->with('success', 'Testimonial Added Successfully');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.testimonial.edit', ['testimonial' => $testimonial]);
    }

    public function update(TestimonialRequest $request, $id)
    {
        $validated = $request->validated();

        $testimonial = Testimonial::findOrFail($id);

//        dd($request);

        $testimonial->name = $validated['name'];
        $testimonial->position = $validated['position'];
        $testimonial->testimonial = $validated['testimonial'];

        if (isset($request->image)){
            Storage::delete($testimonial->image);
        }


        $path = Storage::put('public/', $request->file('image'));
        $testimonial->image = $path;

        $testimonial->save();

        return redirect(route('testimonial_index'))->with('success', 'Testimonial Updated Successfully');

    }

    public function destroy(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        Storage::delete($testimonial->image);
        $testimonial->delete();
        return redirect()->back()->with('success', 'Successfully Deleted Testimonial');
    }
}
