<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Image;
use App\Models\Message;
use App\Models\News;
use App\Models\Partner;
use App\Models\Startup;
use App\Models\Team;
use App\Models\Testimonial;

// TODO: Put error messages at the top of the pages

class PagesController extends Controller
{
    public function welcome()
    {
        $news = News::all(); // TODO: show only the last news for this part
        $startups = Startup::all();
        $partners = Partner::all();

        return view('welcome', ['news' => $news, 'startups' => $startups, 'partners' => $partners]);
    }

    public function about()
    {
        $teams = Team::all();
        $testimonials = Testimonial::all();
        return view('about', ['teams' => $teams, 'testimonials' => $testimonials]);
    }

    public function startups()
    {
        $startups = Startup::all();
        $images = Image::all();

        return view('startups', ['startups' => $startups, 'images' => $images]);
    }

    public function startup_detail($id)
    {
        $startup = Startup::findOrFail($id);
        $images = Image::where('startup_id', $id)->get();

        return view('startup_detail', ['startup' => $startup, 'images' => $images]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function contact_submit(MessageRequest $request)
    {
        $validated = $request->validated();

        $message = new Message($validated);
        $message->save();

        return redirect()->back()->with('success');
    }
    // TODO: include google maps on the about page
}

// TODO: make startup details dynamic
