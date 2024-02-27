<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use App\Models\Role;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class PortofilController extends Controller
{
    public function index($email){
        $user = User::where('email',$email)->firstorfail();
        $roles = Role::all();
        $skills = Skill::all();
        $degrees = Degree::all();

        return view('portofil',['user'=>$user, 'roles'=>$roles, 'skills'=>$skills, 'degrees'=>$degrees ]);
    }
}
