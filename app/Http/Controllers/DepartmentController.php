<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function manage()
    {
        $departments = Department::all();

        return view('departments.admin.index', compact('departments'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Department::create($request->all());

        return redirect()->back()->with('success', 'Jabatan baru telah ditambah!');
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $department->update($request->all());

        return redirect()->back()->with('success', 'Maklumat jabatan telah dikemaskini!');
    }
}
