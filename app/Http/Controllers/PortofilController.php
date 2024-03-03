<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserExperience;
use App\Models\UserDegree;
use App\Models\UserSkill;
use App\Models\User;
use Illuminate\Http\Request;

class PortofilController extends Controller
{
    public function index($email){


       
        $user = User::where('email',$email,)->with(['experiences','skills','degrees'])->firstorfail();
       
       


        return view('portofil',['user'=>$user]);
    }
}
