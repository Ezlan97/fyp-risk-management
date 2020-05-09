<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AkaunOperatorSistemPengurusanRisiko;
use App\Department;
use App\User;

class OperatorController extends Controller
{
    public function manage()
    {
        $operators = User::operator();
        $departments = Department::all();

        return view('operators.admin.index', compact('departments', 'operators'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'department_id' => 'required|integer'
        ]);

        $password = uniqid();
        $operator = new User();
        $operator->name = $request->name;
        $operator->email = $request->email;
        $operator->department_id = $request->department_id;
        $operator->password = bcrypt($password);
        $operator->save();

        $details = [
            'title' => 'Akaun Operator Sistem Pengurusan Risiko',
            'body' => 'Berjaya! akaun operator untuk anda telah ditambah oleh admin, berikut merupakn maklumat untuk log masuk system.',
            'username' => 'Email: ' . $request->email,
            'password' => 'Password: ' . $password
        ];

        \Mail::to($operator->email)->send(new AkaunOperatorSistemPengurusanRisiko($details));

        return redirect()->back()->with('success', 'Operator baru telah ditambah!');
    }

    public function update(Request $request, User $operator)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'department_id' => 'required|integer'
        ]);

        $operator->update($request->all());

        return redirect()->back()->with('success', 'Maklumat operator telah dikemaskini!');
    }
}
