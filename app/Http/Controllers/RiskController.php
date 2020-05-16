<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Risk;
use Auth;

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
                $request->validate([
                    'title' =>  'required',
                    'description' =>  'required',
                    'cause_description' =>  'required',
                    'effect_description' =>  'required',
                    'file' =>  'required',
                    'occurance_rate' =>  'required',
                    'manageability_rate' =>  'required',
                    'dependecies_rate' =>  'required',
                    'urgency_rate' => 'required'
                ]);

                return 'passed';

                break;

            case 'draft':

                $draft = new Risk();
                if($request->has('title'))
                {
                    $draft->title = $request->title;
                }
                if($request->has('description'))
                {
                    $draft->description = $request->description;
                }
                if($request->has('cause_description'))
                {
                    $draft->cause_description = $request->cause_description;
                }
                if($request->has('effect_description'))
                {
                    $draft->effect_description = $request->effect_description;
                }
                if($request->has('occurance_rate'))
                {
                    $draft->occurance_rate = $request->occurance_rate;
                }
                if($request->has('manageability_rate'))
                {
                    $draft->manageability_rate = $request->manageability_rate;
                }
                if($request->has('dependencies_rate'))
                {
                    $draft->dependencies_rate = $request->dependencies_rate;
                }
                if($request->has('urgency_rate'))
                {
                    $draft->urgency_rate = $request->urgency_rate;
                }                
                if ($request->hasFile('file')) {
                    // Get filename with the extension
                    $filenameWithExt = $request->file('file')->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $request->file('file')->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    // Upload Image
                    $path = $request->file('file')->storeAs('public/files',$fileNameToStore);
                    //initiate
                    $draft->file = 'app\public\files\\' . $fileNameToStore;
                }
                $draft->user_id = Auth::user()->id;
                $draft->status = 'Draf';
                $draft->save();

                return redirect()->route('operator.manage.risk')->with('success', 'Risiko telah disimpan sebagai draf.');                

                break;
        }
    }
}
