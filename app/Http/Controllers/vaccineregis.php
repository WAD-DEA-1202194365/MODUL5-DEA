<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vaccineregis extends Controller
{
     public function index(){
        return view('create.createv',[
            'title' => 'Insert'
        ]);
    }
}
