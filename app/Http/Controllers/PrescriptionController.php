<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function create()
    {
        return view('prescriptions.create'); // Render the prescription form
    }

    public function store(Request $request)
    {
        // Placeholder for storing prescription data (e.g., save to database)
        // For now, redirect back with a success message
        return redirect()->back()->with('message', 'Prescription created successfully.');
    }
}
