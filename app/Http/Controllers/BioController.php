<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BioRequest;
use App\Http\Requests\RequestBio;
use App\Models\User;
use Illuminate\Http\Request;

class BioController extends Controller
{
    public function show(){
        return view('bio.edit',['user'=>auth()->user()]);
    }
   public function store(RequestBio $request){
        $uploadrole =$request->avatar->store('public/avatars');
        $uploadrole = str_replace('public','',$uploadrole);
        $user = auth()->user();
        $user->role = $request->role;
        $user->portofillink = $request->portofillink;
        $user->avatar = $uploadrole;
        $user->instagram = $request->instagram;
        $user->linkedin = $request->linkedin;
        $user->introduction = $request->introduction;
        $user->save();
        return redirect()->route('dashboard');
   }

}
