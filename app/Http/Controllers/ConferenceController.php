<?php
namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConferenceController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 'client') {
            $conferences = Conference::where('date', '>=', now())->get();
            return view('conferences.client_index', compact('conferences'));
        } elseif ($user->role == 'employee') {
            $conferences = Conference::all();
            return view('conferences.employee_index', compact('conferences'));
        } elseif ($user->role == 'admin') {
            $conferences = Conference::all();
            return view('conferences.admin_index', compact('conferences'));
        }

        return abort(403); // Nepakankamos teisės
    }
}
