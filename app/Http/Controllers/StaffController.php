<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function create()
    {
        return view('staff.create'); // Renders the registration form
    }
}
