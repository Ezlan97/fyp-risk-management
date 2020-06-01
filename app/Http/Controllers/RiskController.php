<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Mail\MaklumatRisikoBaru;
use App\Mail\KomenBaruSystemPengurusanRisiko;
use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Risk;
use Auth;

class RiskController extends Controller
{
    public function adminManage($status)
    {
        $risks = Risk::where('status', $status)->orderBy('updated_at', 'DESC')->get();
        return view('risks.admin.index', compact('risks', 'status'));
    }

    public function operatorManage()
    {
        $risks = Risk::Owner()->orderBy('updated_at', 'DESC')->get();

        return view('risks.operator.index', compact('risks'));
    }

    public function createPage()
    {
        return view('risks.operator.create-page');
    }

    public function updatePage(Risk $risk)
    {
        return view('risks.operator.update-page', compact('risk'));
    }

    public function create(Request $request)
    {
        if($request->action == 'save&submit' || $request->action == 'update&submit')
        {
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

            if($request->action == 'save&submit')
            {                
                $submit = new Risk();
            }
            else
            {
                $submit = Risk::find($request->id);
            }

                $submit->title = $request->title;            
                $submit->description = $request->description;            
                $submit->cause_description = $request->cause_description;            
                $submit->effect_description = $request->effect_description;            
                $submit->occurrence = $request->occurrence;            
                $submit->manageability = $request->manageability;            
                $submit->dependencies = $request->dependencies;            
                $submit->urgency = $request->urgency;                
                $submit->proximities = $request->proximities;                
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
                    $submit->file = 'app\public\files\\' . $fileNameToStore;
                }
                $submit->user_id = Auth::user()->id;
                $submit->status = 'Menunggu Kelulusan';
                $submit->save();

                $details = [
                    'title' => 'Maklumat Risiko Baru',
                    'body' => 'Risiko baru telah dikesan oleh operator, sila log masuk dan semak.',
                    'tajuk' => $submit->title,
                    'penerangan' => $submit->description,
                    'oleh' => Auth::user()->name
                ];

                $email = User::admin()->first()->email;
        
                \Mail::to($email)->send(new MaklumatRisikoBaru($details));

                return redirect()->route('operator.manage.risk')->with('success', 'Maklumat risiko telah dihantar kepada admin untuk semakan.');                

        }
        else
        {            
            if($request->action == 'save&draft')
            {                
                $submit = new Risk();
            }
            else
            {
                $request->validate([
                    'id' => 'required'
                ]);
                
                $submit = Risk::find($request->id);
            }

            if($request->has('title'))
            {
                $submit->title = $request->title;
            }
            if($request->has('description'))
            {
                $submit->description = $request->description;
            }
            if($request->has('cause_description'))
            {
                $submit->cause_description = $request->cause_description;
            }
            if($request->has('effect_description'))
            {
                $submit->effect_description = $request->effect_description;
            }
            if($request->has('occurrence'))
            {
                $submit->occurrence = $request->occurrence;
            }
            if($request->has('manageability'))
            {
                $submit->manageability = $request->manageability;
            }
            if($request->has('dependencies'))
            {
                $submit->dependencies = $request->dependencies;
            }
            if($request->has('urgency'))
            {
                $submit->urgency = $request->urgency;
            } 
            if($request->has('proximities'))
            {
                $submit->proximities = $request->proximities;
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
                $submit->file = 'app\public\files\\' . $fileNameToStore;
            }
            $submit->user_id = Auth::user()->id;
            $submit->status = 'Draf';
            $submit->save();

            return redirect()->route('operator.manage.risk')->with('success', 'Draf risiko telah dikemaskini.');
        }
    }

    public function updateStatus(Risk $risk, Request $request)
    {            
        $request->validate([
            'comment' => 'sometimes',
            'status' => 'required'
        ]);
                
        $risk->status = $request->status;
        $risk->save();

        if($request->comment != null)
        {
            $comment = new Comment();
            $comment->user_id = Auth::user()->id;
            $comment->comment = $request->comment;
            $comment->risk_id = $risk->id;
            $comment->save();
        }        
            
        return redirect()->back()->with('success', 'Comment dan status risiko telah disimpan dan dihantar kepada operator!');
    }

    public function comment(Risk $risk, Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->comment = $request->comment;
        $comment->risk_id = $risk->id;
        $comment->save();
        
        $details = [
            'title' => 'Komen Risiko',
            'body' => 'Komen baru dari operator.',
            'risiko' => $risk->title,
            'penerangan' => $risk->description,
            'comment' => $request->comment,
            'oleh' => Auth::user()->name
        ];

        if(Auth::user()->level != 1)
        {
            $email = User::admin()->first()->email;
        }
        else
        {
            $email = $risk->user->email;
        }

        \Mail::to($email)->send(new KomenBaruSystemPengurusanRisiko($details));

        return redirect()->back()->with('success', 'Comment telah disimpan dan dihantar!');
    }
    
    public function download(Risk $risk)
    {
        return response()->download(storage_path($risk->file));
    }
}
