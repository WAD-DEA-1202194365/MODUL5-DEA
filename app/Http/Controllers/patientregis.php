<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class patientregis extends Controller
{
     public function index(){
        return view('create.createp',[
            'title' => 'Registrasi'
        ]);
    }


    public function store(){
        return request()->all();

        dd('registrasi berhasil');
    }
}