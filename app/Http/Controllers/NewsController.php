<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(20);
        return view('dashboard.news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('dashboard.news.create');
    }

    public function store(NewsRequest $request)
    {
        $validated = $request->validated();
        $news = new News($validated);

        $news->image = Storage::disk('local')->put('public/', $request->file('image'));

        $news->save();

        return redirect(route('dashboard_index'))->with('success');
    }

    // TODO prepare editing place for news

}
