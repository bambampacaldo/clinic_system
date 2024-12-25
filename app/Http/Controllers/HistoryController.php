<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        // Example data (Replace with database queries when needed)
        $histories = [
            [
                'id' => 1,
                'patient_name' => 'John Doe',
                'diagnosis' => 'Flu',
                'treatment' => 'Rest, hydration, and paracetamol',
                'date' => '2024-12-15',
            ],
            [
                'id' => 2,
                'patient_name' => 'Jane Smith',
                'diagnosis' => 'Sprained Ankle',
                'treatment' => 'Physical therapy and pain relievers',
                'date' => '2024-12-16',
            ],
        ];

        return view('history.index', compact('histories'));
    }
}
