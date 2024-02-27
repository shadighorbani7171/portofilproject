<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Degreerequest;
use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function index(){
        return view('education.edit');
    }
    public function store(Degreerequest $request){
        $degree = new Degree();
        $degree->section = $request->section;
        $degree->year = $request->year;
        $degree->institutions = $request->institutions;
        $degree->save();
        return redirect()->route('dashboard');
    }
}
