<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        // Example data (Replace with database queries if needed)
        $appointments = [
            ['id' => 1, 'name' => 'John Doe', 'date' => '2024-12-25', 'time' => '10:00 AM', 'doctor' => 'Dr. Smith'],
            ['id' => 2, 'name' => 'Jane Smith', 'date' => '2024-12-26', 'time' => '2:00 PM', 'doctor' => 'Dr. Brown'],
        ];

        return view('appointments.index', compact('appointments'));
    }
    public function create()
    {
        return view('appointments.create'); // Render the appointment creation form
    }

    public function store(Request $request)
    {
        // Placeholder for storing appointment data (e.g., save to database)
        // For now, just redirect back with a success message
        return redirect()->back()->with('message', 'Appointment scheduled successfully.');
    }
}
