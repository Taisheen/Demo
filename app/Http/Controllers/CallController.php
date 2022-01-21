<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Callcontroller extends Controller
{
    public function index(){ 
        return view("Call");
    }
}
