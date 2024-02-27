<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vectorrequest;
use App\Models\Vector;
use Illuminate\Http\Request;

class VectorController extends Controller
{
    public function index(){
        return view('vector');
    }
    public function store(Vectorrequest $request ){
        $uploadrole =$request->vector->store('public/vectors');
        $uploadrole = str_replace('public','',$uploadrole);

        $vector = new Vector;
        $vector->vector = $uploadrole;
    }
}
