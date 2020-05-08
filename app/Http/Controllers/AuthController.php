<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        //redirect user based on admin or executive
        if (Auth::attempt($credentials)) {
            if(Auth::user()->status == 'Tidak Aktif') {

                Auth::logout();
                return redirect()->back()->with('danger', 'Akaun anda tidak lagi aktif, sila hubungi admin untuk mengaktifkan semula akaun');

            } elseif(Auth::user()->isAdmin()) {

               //----------------- admin -----------------------
                return redirect()->route('admin.dashboard');

           } else {
               
                //------------- branch operator -----------
                return redirect()->route('branch.operator.dashboard');

            }
        } else {
            return redirect()->back()->with('danger', 'Emel atau kata laluan tidak tepat');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('guest.login.page')->with('success', 'Anda telah log keluar!');
    }
}
