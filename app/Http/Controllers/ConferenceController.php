<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all(); // Gauti visas konferencijas
        return view('conferences.index', compact('conferences')); // Pateikti duomenis į view
    }
    

    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        // Validacija
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);
    
        // Masinis priskyrimas
        Conference::create($request->all());
    
        return redirect()->route('conferences.index')
                         ->with('success', 'Konferencija sėkmingai pridėta.');
    }
    
    }
