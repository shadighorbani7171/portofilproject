<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\Rolerequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
       
        
        return view('experience.edit');
    }
    public function store(Rolerequest $request){
        
       $role = new Role();
       $role->title = $request->title;
       $role->company = $request->company;
       $role->content = $request->content;
       $role->year = $request->year;
       $role->summary = $request->summary;
       $role->save();
       return redirect()->route('dashboard');
 
    }
}
