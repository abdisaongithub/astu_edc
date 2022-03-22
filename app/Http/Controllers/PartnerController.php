<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::paginate(20);
        return view('dashboard.partner.index', ['partners' => $partners]);
    }


    public function create()
    {
        return view('dashboard.partner.create');
    }

    public function store(PartnerRequest $request)
    {
        $validated = $request->validated();
        $partner = new Partner($validated);

        $partner->image = Storage::disk('local')->put('public/', $request->file('image'));

        $partner->description = 'Description not provided';
        $partner->save();

        return redirect(route('partner_index'))->with('success', 'Partner Added Successfully');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('dashboard.partner.edit', ['partner' => $partner]);
    }

    public function update(PartnerRequest $request, $id)
    {
        $validated = $request->validated();

        $partner = Partner::findOrFail($id);
        $partner->description = 'Description not provided';
        $partner->name = $validated['name'];
        $partner->link = $validated['link'];

        if (isset($request->image)){
            Storage::delete($partner->image);
            $partner->image = Storage::put('public/', $request->file('image'));
        }

        $partner->save();

        return redirect(route('partner_index'))->with('success', 'Partner Updated Successfully');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        Storage::delete($partner->image);
        $partner->delete();
        return redirect()->back()->with('success', 'Successfully Deleted Resource');
    }
}
