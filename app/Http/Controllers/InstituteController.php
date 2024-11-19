<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    // Display a list of institutes
    public function index()
    {
        $institutes = Institute::all();
        return view('institutes.index', compact('institutes'));
    }

    // Show the form to create a new institute
    public function create()
    {
        return view('institutes.create');
    }

    // Store a new institute
    public function store(Request $request)
    {
        $validated = $request->validate([
            'inst_name' => 'required|string|max:45',
            'location' => 'required|string',
            'contact_number' => 'required|string|max:15',
        ]);

        $institute = Institute::create($validated);

        // Redirect to the edit page of the created institute
        return redirect()->route('institutes.index')
            ->with('success', 'Institute created successfully!');
    }

    // Show the edit form for a specific institute
    public function edit(Institute $institute)
    {
        return view('institutes.edit', compact('institute'));
    }

    // Update a specific institute
    public function update(Request $request, Institute $institute)
    {
        $validated = $request->validate([
            'inst_name' => 'required|string|max:45',
            'location' => 'required|string',
            'contact_number' => 'required|string|max:15',
        ]);

        $institute->update($validated);

        return redirect()->route('institutes.index')
            ->with('success', 'Institute updated successfully!');
    }

    // Delete a specific institute
    public function destroy(Institute $institute)
    {
        $institute->delete();

        return redirect()->route('institutes.index')
            ->with('success', 'Institute deleted successfully!');
    }
}
