<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Proposal;

class AdminController extends Controller
{
    public function viewAll(){
        $proposals = Proposal::all();
        return view('viewall', compact('proposals'));
    }
}
