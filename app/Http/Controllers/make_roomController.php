<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class make_roomController extends Controller
{
    public function getvalues(Request $request){
        if(!empty($_GET)){
            $Mroom = $request['Mroom'];
            $Jroom = $request["Jroom"];
        }
        header("Location:Call");
        return view("make_room");
    }
}
