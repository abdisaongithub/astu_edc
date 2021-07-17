<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function create()
    {
        return view('dashboard.partner.create');
    }

    public function store(PartnerRequest $request)
    {
        $validated = $request->validated();
        $partner = new Partner($validated);
        $partner->image = 'http://localhost:8000/img/team/team-1.jpg';
        $partner->description = 'Description not provided';
        $partner->save();
        return redirect()->back()->with('success');
    }
}
