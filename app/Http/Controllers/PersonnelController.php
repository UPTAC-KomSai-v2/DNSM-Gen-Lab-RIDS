<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function PersonnelDashboard()
    {
        return view('personnel.personnel_dashboard');
    }
}
