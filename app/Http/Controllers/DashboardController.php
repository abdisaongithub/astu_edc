<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Partner;
use App\Models\Startup;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $startups = Startup::all();
        $news = News::all();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $partners = Partner::all();
        return view('dashboard.index', [
            'startups' => $startups,
            'news' => $news,
            'testimonials' => $testimonials,
            'teams' => $teams,
            'partners' => $partners
            ]);
    }


}
