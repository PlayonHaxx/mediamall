<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function create(){
        return view('program.create');
    }

    public function store(){
        //
    }
}
