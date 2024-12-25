<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function create()
    {
        return view('diagnosis.create'); // Render the diagnosis form
    }

    public function store(Request $request)
    {
        // Placeholder for storing diagnosis data (e.g., save to database)
        // For now, redirect back with a success message
        return redirect()->back()->with('message', 'Diagnosis created successfully.');
    }
}
