<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskController extends Controller
{
    public function adminManage()
    {
        return view('risks.admin.index');
    }

    public function operatorManage()
    {
        return view('risks.operator.index');
    }

    public function createPage()
    {
        return view('risks.operator.create-page');
    }

    public function create(Request $request)
    {
        switch ($request->input('action'))
        {
            case 'save':
                
                break;

            case 'draft':

                break;
        }
    }
}
