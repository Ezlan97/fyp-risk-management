<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluation;
Use App\Risk;
Use App\Department;
Use App\User;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $risks = Risk::all();
        $departments = Department::all()->count();
        $operators = User::operator()->count();
        $evaluations = Evaluation::where('State', 'Sebelum')->get();

        return view('dashboard.admin.index', compact('risks', 'departments', 'operators', 'evaluations'));
    }

    public function operatorDashboard()
    {
        return view('dashboard.operator.index');
    }
}
