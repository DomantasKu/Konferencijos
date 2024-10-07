<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Participant; // Assuming you have a Participant model
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    // Method to show all conferences
    public function index()
    {
        $conferences = Conference::all(); // Get all conferences
        return view('conferences.index', compact('conferences'));
    }

    // Method to show the create conference form
    public function create()
    {
        return view('conferences.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        // Create the conference
        Conference::create($request->all());

        // Flash a success message to the session
        return redirect()->route('conferences.index')->with('success', 'Conference created successfully!');
    }

    // Method to show the edit form for a specific conference
    public function edit(Conference $conference)
    {
        return view('conferences.edit', compact('conference'));
    }

    // Method to update a specific conference
    public function update(Request $request, Conference $conference)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        // Update conference details
        $conference->update($request->all());

        return redirect()->route('conferences.show', $conference->id)->with('success', 'Conference updated successfully!');
    }

    // Method to show details of a specific conference
    public function show(Conference $conference)
    {
        $participants = $conference->participants; // Get participants associated with the conference
        return view('conferences.show', compact('conference', 'participants'));
    }

    // Method to show the registration form for participants
    public function showRegistrationForm(Conference $conference)
    {
        return view('conferences.register', compact('conference'));
    }

    // Method to register a participant for a specific conference
    public function register(Request $request, Conference $conference)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
        ]);

        // Create participant
        $conference->participants()->create([
            'name' => $request->name,
            'surname' => $request->surname,
        ]);

        return redirect()->route('conferences.show', $conference->id)->with('success', 'Successfully registered!');
    }

    // Method to remove a conference
    public function destroy(Conference $conference)
    {
        $conference->delete();
        return redirect()->route('conferences.index')->with('success', 'Conference removed successfully!');
    }
}
