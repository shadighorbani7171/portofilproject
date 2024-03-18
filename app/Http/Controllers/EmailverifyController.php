<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Usermail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailverifyController extends Controller
{
    public function index(){
        $user = User::orderby('created_at','DESC')->first();
        Mail::to($user)->send( new Usermail($user));
    }
    public function verify($token){
       $id = decrypt($token);
       $user = User::find($id)->whereNull('email_verified_at')->firstOrFail();
       $user->email_verified_at = Carbon::now();
       $user->save();
       echo 'you are verified';


    
}
}
