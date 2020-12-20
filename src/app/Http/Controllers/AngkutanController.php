<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngkutanController extends Controller
{
    //
    public function tampilform(){
        return view("Angkutan.form");

    }
    public function tampillist(){
        return view("Angkutan.list");
    }
}
