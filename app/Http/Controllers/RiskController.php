<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskController extends Controller
{
    public function manage()
    {
        return view('risks.admin.index');
    }
}
