<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('dashboard.admin.index');
    }

    public function operatorDashboard()
    {
        return view('dashboard.operator.index');
    }
}
