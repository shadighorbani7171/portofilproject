<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skillrequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        return view('skills.edit');
    }
    public function store(Skillrequest $request){
       $skill = new Skill;
       $skill->name = $request->name;
       $skill->tools = $request->tools;
       $skill->save();
       return redirect()->route('dashboard');
}
}
