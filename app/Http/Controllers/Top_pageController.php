<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Top_pageController extends Controller
{
    public function index(){
        print "hello";
        return view("Top_page");
    }
}
