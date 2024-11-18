<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutes = Institute::with('branch')->get();
        return view(
            'institute.index',
            compact('institutes')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Branches = Branch::All();
        return view(
            'institute.create',
            compact('Branches')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'inst_name' => 'required|string|max:45',
            'location' => 'required|string',
            'contact_number' => 'required|string|max:45',
            'branch_branch_id' => 'required|exists:branches,branch_id',
        ]);

        $location = json_encode([
            'lat' => $request->latitude,
            'lng' => $request->longitude
        ]);

        Institute::create([
            'inst_name' => $request->inst_name,
            'location' => $location,
            'contact_number' => $request->contact_number,
            'branch_branch_id' => $request->branch_branch_id,
        ]);

        return redirect()->route('institute.index')
            ->with('success', 'Institute created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Institute $institute)
    {
        return view(
            'institute.show',
            compact('institute')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institute $institute)
    {
        $branches = Branch::all();
        $location = json_decode($institute->location, true);
        return view(
            'institute.edit',
            compact(
                'institute',
                'branches',
                'location'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Institute $Institute)
    {
        $request->validate([
            'inst_name' => 'required|string|max:45',
            'location' => 'required|string',
            'contact_number' => 'required|string|max:45',
            'branch_branch_id' => 'required|exists:branches,branch_id',
        ]);

        $location = json_encode([
            'lat' => $request->latitude,
            'lng' => $request->longitude
        ]);

        $Institute->update([
            'inst_name' => $request->inst_name,
            'location' => $location,
            'contact_number' => $request->contact_number,
            'branch_branch_id' => $request->branch_branch_id,
        ]);

        return redirect()->route('institute.index')->
            with('success', 'Institute updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institute $institute)
    {
        $institute->delete();
        return redirect()->route('institute.index')->
            with('sucess', 'Institute deleted successfully..');
    }
}
