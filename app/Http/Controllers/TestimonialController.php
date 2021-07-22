<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function create()
    {
        return view('dashboard.testimonial.create');
    }

    public function store(TestimonialRequest $request)
    {
        $validated = $request->validated();

        $testimonial = new Testimonial($validated);

        $path = Storage::disk('local')->put('public/', $request->file('image'));

        $testimonial->image = $path;

//        dd($request);

        $testimonial->save();

        return redirect(route('dashboard_index'))->with('success', 'Testimonial Added Successfully');
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

        $testimonial->name = $validated['name'];
        $testimonial->position = $validated['position'];
        $testimonial->testimonial = $validated['testimonial'];

        $path = $request->file('image')->store('testimonials');

        $testimonial->image = $path;

        $testimonial->save();

        return redirect(route('dashboard_index'))->with('success', 'Testimonial Updated Successfully');

    }
}
