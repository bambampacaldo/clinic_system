<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentFacultyController extends Controller
{
    public function create()
    {
        return view('studentFaculty.create'); // Renders the registration form
    }

    public function store(Request $request)
    {
        // Placeholder for processing registration (backend interaction not required in this project)
        return redirect()->back()->with('message', 'Student or Faculty registered successfully.');
    }
}

