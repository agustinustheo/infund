<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Proposal;

class ProposalController extends Controller
{
    public function proposalUpload(Request $request){
        //$request->file('proposal')->store('public/proposals');
        $proposal_name = $request->proposal->getClientOriginalName();
        $proposal_name = str_replace(" ","-",$proposal_name);
        // $proposal_extension = $request->proposal->getClientOriginalExtension();
        // $proposal_title = str_replace('.'.$proposal_extension,"",$proposal_name);
        $filename = str_random(5)."_".$proposal_name;
        $proposal = $request->file('proposal')->storeAs('public/proposals',$filename);
        return view('uploadproposal', compact('filename'));
    }

    public function proposalConfirm(Request $request){
        // if ($request->title != strstr(substr($request->filename,6),".",true)){
        //     dd($request->title);
        // }
        $title = $request->title;
        $title_hid = str_replace(" ","-",$title);
        $desc = $request->desc;
        $desc_hid = str_replace(" ","-",$desc);
        $fund = $request->fund;
        $filename = $request->filename;
        return view('proposal',compact('title','title_hid','desc','desc_hid','fund','filename'));
    }

    public function proposalStore(Request $request){
        $proposal = new Proposal;
        $proposal->user_id = Auth::user()->id;
        $proposal->title = str_replace("-"," ",$request->title);
        $proposal->description = str_replace("-"," ",$request->desc);
        $proposal->funds = $request->fund;
        $proposal->views = 0;
        $proposal->filename = $request->filename;
        $proposal->save();
        return redirect('/dashboard');
    }

    public function viewProposal($user_id, $prop_title){
        $proposal = Proposal::where('user_id',$user_id)->where('title',$prop_title)->first();
        return view('viewproposal', compact('proposal'));
    }

    public function addView($prop_id){
        $proposal = Proposal::where('id',$prop_id)->first();
        $proposal->views += 1;
        $proposal->save();
    }
}
