<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ClerkController extends Controller
{
    public function manage()
    {
        $clerks = User::clerk();

        return view('clerk.operator.index', compact('clerks'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'sometimes'
        ]);
            
        $clerk = new User();
        $clerk->name = $request->name;
        $clerk->email = $request->email;
        $clerk->phone_number = $request->phone_number;
        $clerk->password = bcrypt($request->email);
        $clerk->level = 3;
        $clerk->save();

        return redirect()->back()->with('success', 'Pembantu Tadbir baru telah ditambah!');
    }

    public function update(User $clerk, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'sometimes',
            'status' => 'required'
        ]);

        $clerk->update($request->all());

        return redirect()->back()->with('success', 'Pembantu Tadbir telah dikemaskini!');
    }
}
