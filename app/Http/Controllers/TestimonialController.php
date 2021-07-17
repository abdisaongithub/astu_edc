<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

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
        $testimonial->image = 'http://localhost:8000/img/team/team-1.jpg';
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

        $testimonial->save();

        return redirect(route('dashboard_index'))->with('success', 'Testimonial Updated Successfully');

    }
}
