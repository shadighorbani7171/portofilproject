<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\createorupdateExperienceRequest;
use App\Models\UserExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $experiences = UserExperience::where('user_id', auth()->user()->id)->paginate(2);
        
      


        return view('experience.list',['experiences'=>$experiences]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createorupdateExperienceRequest $request)
    {
      $experiences = new UserExperience;
       $experiences->title = $request->title;
      $experiences->company = $request->company;
      $experiences->content = $request->content;
      $experiences->year = $request->year;
      $experiences->summary = $request->summary;
      $experiences->save();
      return redirect()->route('experience'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
     
    //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $experinces = UserExperience::find($id);
      
       return view('experience.edit',['experiences'=>$experinces]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request, string $id)
    {    
        $experiences = UserExperience::find($id);
        $experiences->title = $request->title;
        $experiences->company = $request->company;
        $experiences->content = $request->content;
        $experiences->year = $request->year;
        $experiences->summary = $request->summary;
        $experiences->save();
        return redirect('/experience')->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experiences = UserExperience::find($id);
        $experiences->delete();
        return redirect()->route('experience'); 
    }

}
