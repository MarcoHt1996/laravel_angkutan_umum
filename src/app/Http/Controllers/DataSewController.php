<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSewController extends Controller
{
    //

    public function tampil_form_datasewa(){
        return view("daftarsewa.form");
    }
}
