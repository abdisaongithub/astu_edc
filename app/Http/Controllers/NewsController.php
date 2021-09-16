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

        return redirect(route('news_index'))->with('success', 'Nes Added Successfully');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('dashboard.news.edit', ['news' => $news]);
    }

    public function update(NewsRequest $request, $id)
    {
        $validated = $request->validated();

        $news = News::findOrFail($id);

        $news->title = $validated['title'];
        $news->description = $validated['description'];
        $news->link = $validated['link'];

        if (isset($request->image)){
            Storage::delete($news->image);
            $news->image = Storage::put('public', $request->file('image'));
        }

        $news->save();

        return redirect(route('news_index'))->with('success', 'Successfully Updated News');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        $news->delete();
        return redirect()->back()->with('success', 'Successfully Deleted News');
    }

}
