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
        $risks = Risk::Owner()->get();

        return view('risks.operator.index', compact('risks'));
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
                    'occurrence' =>  'required',
                    'manageability' =>  'required',
                    'dependencies' =>  'required',
                    'urgency' => 'required',
                    'proximities' => 'required'
                ]);

                $save = new Risk();
                $save->title = $request->title;            
                $save->description = $request->description;            
                $save->cause_description = $request->cause_description;            
                $save->effect_description = $request->effect_description;            
                $save->occurrence = $request->occurrence;            
                $save->manageability = $request->manageability;            
                $save->dependencies = $request->dependencies;            
                $save->urgency = $request->urgency;                
                $save->proximities = $request->proximities;                
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
                    $save->file = 'app\public\files\\' . $fileNameToStore;
                }
                $save->user_id = Auth::user()->id;
                $save->status = 'Menunggu Kelulusan';
                $save->save();

                return redirect()->route('operator.manage.risk')->with('success', 'Risiko telah disimpan sebagai draf.');

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
                if($request->has('occurrence'))
                {
                    $draft->occurrence = $request->occurrence;
                }
                if($request->has('manageability'))
                {
                    $draft->manageability = $request->manageability;
                }
                if($request->has('dependencies'))
                {
                    $draft->dependencies = $request->dependencies;
                }
                if($request->has('urgency'))
                {
                    $draft->urgency = $request->urgency;
                } 
                if($request->has('proximities'))
                {
                    $draft->proximities = $request->proximities;
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
            
            case 'update':
                
                $request->validate([
                    'id' => 'required'
                ]);

                $update = Risk::find($request->id);
                if($request->has('title'))
                {
                    $update->title = $request->title;
                }
                if($request->has('description'))
                {
                    $update->description = $request->description;
                }
                if($request->has('cause_description'))
                {
                    $update->cause_description = $request->cause_description;
                }
                if($request->has('effect_description'))
                {
                    $update->effect_description = $request->effect_description;
                }
                if($request->has('occurrence'))
                {
                    $update->occurrence = $request->occurrence;
                }
                if($request->has('manageability'))
                {
                    $update->manageability = $request->manageability;
                }
                if($request->has('dependencies'))
                {
                    $update->dependencies = $request->dependencies;
                }
                if($request->has('urgency'))
                {
                    $update->urgency = $request->urgency;
                } 
                if($request->has('proximities'))
                {
                    $update->proximities = $request->proximities;
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
                    $update->file = 'app\public\files\\' . $fileNameToStore;
                }
                $update->user_id = Auth::user()->id;
                $update->status = 'Draf';
                $update->save();

                return redirect()->route('operator.manage.risk')->with('success', 'Draf risiko telah dikemaskini.');
                break;
        }
    }

    public function updatePage(Risk $risk)
    {
        return view('risks.operator.update-page', compact('risk'));
    }
}
