<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use App\Http\Requests\createorupdateDegreerequest;
use App\Models\UserDegree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
         $degrees = $user->degrees;
        return view('education.list',['degrees'=>$degrees]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createorupdateDegreerequest $request)
    {
           
           $degrees = new UserDegree;
           $degrees->user_id = auth()->user()->id;
           $degrees->institutions = $request->institutions;
           $degrees->section = $request->section;
           $degrees->year = $request->year;
           $degrees->save();
           return redirect()->route('education.list');
            

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
      $degrees = UserDegree::find($id);
      return view('education.edit',['degrees'=>$degrees]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $degrees = UserDegree::find($id);
        $degrees->institutions = $request->institutions;
        $degrees->section = $request->section;
        $degrees->year = $request->year;
        $degrees->save();
        return redirect()->route('education.list'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $degrees = UserDegree::find($id);
        $degrees->delete();
        return redirect()->route('education.list');
    }
}
