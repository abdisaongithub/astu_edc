<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('dashboard.news.create');
    }

    public function store(NewsRequest $request)
    {
        $validated = $request->validated();
        unset($validated->image);
        // TODO:  image name from request
        // TODO: prepare flash messages
        $news = new News($validated);
        $news['image'] = 'http://localhost:8000/img/team/team-1.jpg';
        $news->save();
        return redirect()->back()->with('success');
    }

    // TODO prepare editing place for news

}
