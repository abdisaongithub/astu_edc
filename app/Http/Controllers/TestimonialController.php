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
        return $validated;
    }
}
