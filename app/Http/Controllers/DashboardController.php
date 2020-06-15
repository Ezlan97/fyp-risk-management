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
        $risks = Risk::where('status', 'Lulus & Sedang Di Urus')->get();
        $departments = Department::all()->count();
        $operators = User::operator()->count();

        return view('dashboard.admin.index', compact('risks', 'departments', 'operators'));
    }

    public function operatorDashboard()
    {
        return view('dashboard.operator.index');
    }

    public function test()
    {
        return view('test');
    }
}
