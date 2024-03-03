<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\createorupdateskillrequest;
use App\Models\UserSkill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $skills = $user->skills;
        return view('skills.list',['skills'=>$skills]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
    }

        
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(createorupdateskillrequest $request)
    {
        $skills = new UserSkill;
        $skills->user_id = auth()->user()->id;
        $skills->name = $request->name;
        $skills->tools = $request->tools;
        $skills->save();
        return redirect()->route('skills.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $skills = UserSkill::find($id);
       return view('skills.edit',['skills'=>$skills]); 
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skills = UserSkill::find($id);
        $skills->name = $request->name;
        $skills->tools = $request->tools;
        $skills->save();
        return redirect()->route('skills.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = UserSkill::find($id);
        $skills->delete();
        return redirect()->route('skills.list');                    
    }
}
