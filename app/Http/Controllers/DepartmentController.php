<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function manage()
    {
        return view('departments.admin.index');
    }
}
