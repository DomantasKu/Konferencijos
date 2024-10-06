<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Participant;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    // Display all conferences
    public function index()
    {
        $conferences = Conference::all();
        return view('conferences.index', compact('conferences'));
    }

    // Show the form for creating a new conference
    public function create()
    {
        return view('conferences.create');
    }

    // Store a new conference
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        Conference::create($request->all());
        return redirect()->route('conferences.index')->with('success', 'Conference created successfully!');
    }

    // Display a specific conference
    public function show(Conference $conference)
    {
        $participants = $conference->participants;
        return view('conferences.show', compact('conference', 'participants'));
    }

    // Register a participant for a conference
    public function register(Request $request, Conference $conference)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
        ]);

        $conference->participants()->create([
            'name' => $request->name,
            'surname' => $request->surname,
        ]);

        return redirect()->route('conferences.show', $conference->id)->with('success', 'Successfully registered!');
    }
    public function destroy(Conference $conference)
{
    $conference->delete(); // Or use $conference->delete() if you're using soft deletes
    return redirect()->route('conferences.index')->with('success', 'Conference removed successfully!');
}
public function showRegistrationForm(Conference $conference)
{
    return view('conferences.register', compact('conference'));
}

}
