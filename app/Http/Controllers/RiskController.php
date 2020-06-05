<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Mail\MaklumatRisikoBaru;
use App\Mail\KomenBaruSystemPengurusanRisiko;
use Illuminate\Http\Request;
use App\Mitigation;
use App\Evaluation;
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
        $clerks = User::clerk();

        return view('risks.operator.create-page', compact('clerks'));
    }

    public function updatePage(Risk $risk)
    {
        $clerks = User::clerk();

        return view('risks.operator.update-page', compact('risk', 'clerks'));
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
                'proximities' => 'required',
                'mitigation' => 'required',
                'dateline' => 'required',
                'person_in_charge' => 'required'
            ]);

            if($request->action == 'save&submit')
            {                
                $risk = new Risk();
            }
            else
            {
                $risk = Risk::find($request->id);
            }
                // new risk
                $risk->title = $request->title;            
                $risk->description = $request->description;            
                $risk->cause_description = $request->cause_description;            
                $risk->effect_description = $request->effect_description;                                           
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
                    $risk->file = 'app\public\files\\' . $fileNameToStore;
                }
                $risk->user_id = Auth::user()->id;
                $risk->status = 'Menunggu Kelulusan';
                $risk->save();

                // new evaluation
                $evaluation = new Evaluation();
                $evaluation->occurrence = $request->occurrence;
                $evaluation->manageability = $request->manageability;
                $evaluation->dependencies = $request->dependencies;
                $evaluation->urgency = $request->urgency;
                $evaluation->proximities = $request->proximities;
                $evaluation->risk_id = $risk->id;
                $evaluation->save();

                // new mitigation
                $mitigation = new Mitigation();
                $mitigation->mitigation = $request->mitigation;
                $mitigation->dateline = $request->dateline;
                $mitigation->user_id = $request->person_in_charge;
                $mitigation->risk_id = $risk->id;
                $mitigation->save();

                // send email
                $details = [
                    'title' => 'Maklumat Risiko Baru',
                    'body' => 'Risiko baru telah dikesan oleh operator, sila log masuk dan semak.',
                    'tajuk' => $risk->title,
                    'penerangan' => $risk->description,
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
                $risk = new Risk();
            }
            else
            {
                $request->validate([
                    'id' => 'required'
                ]);
                
                $risk = Risk::find($request->id);
            }

            if($request->has('title'))
            {
                $risk->title = $request->title;
            }
            if($request->has('description'))
            {
                $risk->description = $request->description;
            }
            if($request->has('cause_description'))
            {
                $risk->cause_description = $request->cause_description;
            }
            if($request->has('effect_description'))
            {
                $risk->effect_description = $request->effect_description;
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
                $risk->file = 'app\public\files\\' . $fileNameToStore;
            }
            $risk->user_id = Auth::user()->id;
            $risk->status = 'Draf';
            $risk->save();

            // update evaluation
            $evaluation = $risk->evaluation->where('state', 'Sebelum')->first();
            if($request->has('occurrence'))
            {
                $evaluation->occurrence = $request->occurrence;
            }
            if($request->has('manageability'))
            {
                $evaluation->manageability = $request->manageability;
            }
            if($request->has('dependencies'))
            {
                $evaluation->dependencies = $request->dependencies;
            }
            if($request->has('urgency'))
            {
                $evaluation->urgency = $request->urgency;
            } 
            if($request->has('proximities'))
            {
                $evaluation->proximities = $request->proximities;
            }
            if($request->has('status'))
            {
                $evaluation->status = $request->status;
            }
            $evaluation->save();

            // update mitigation
            $mitigation = $risk->mitigation->first();
            if($request->has('urgency'))
            {
                $mitigation->mitigation = $request->mitigation;
            } 
            if($request->has('dateline'))
            {
                $mitigation->dateline = $request->dateline;
            }
            if($request->has('person_in_charge'))
            {
                $mitigation->user_id = $request->person_in_charge;
            }
            $mitigation->save();

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
