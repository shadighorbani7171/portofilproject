<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PortofilController extends Controller
{
   public function index($email){
    
    $user = User::where('email',$email,)->with(['experiences','skills','degrees'])->firstorfail();
       
     return response($user);  

   

   }
   
}
