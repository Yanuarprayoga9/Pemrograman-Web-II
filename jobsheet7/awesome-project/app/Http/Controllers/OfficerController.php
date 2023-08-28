<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index(){
        $officer = Officer::with('customers')->get();

        return view('officer.index',['officer'=>$officer]);
    }
}
